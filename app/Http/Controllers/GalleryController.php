<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


//use App\Http\Requests\GalleryRequest;

class GalleryController extends Controller
{
    //trás informoçoes de todas as imagens e seus diretórios/
    public function showGallery($dir)
    {
        //fazer modal ao clicar em uma unica imagem** !!!
        $folders = DB::table('galleries')->where('folders', $dir)->get();
        return view('admin.dashboard.show_gallery', [
            'collections' => $folders
        ]);
    }

    // controla o form_gallery enviando dados
    public function index()
    {
        $folders = Storage::disk('public')->directories();

        return view('admin.dashboard.form_gallery', [
            'folders' => $folders
        ]);
    }

    // Adiciona imagens e a pasta onde foi gravada, no banco de dados
    public function uploadImages(Request $request)
    {
        $request->validate([
            'files*' => ['required', 'image', 'mimes:jpeg,png,jpg']
        ]);

        if ($request->hasfile('files')) {

            foreach ($request->file('files') as $file) {

                if ($file->isValid()) {
                    
                    $options = $request->only('options');
                    
                    if (!$options['options'] == null) {
                        
                        $path = Storage::disk('public')->put($options['options'], $file);
                        $path2 = explode('/', $path);
                        

                        Gallery::create([
                            'filename' => $path2[1],
                            'folders' => $options['options']
                        ]);

                        //return redirect()->route('gallery.uploadimages')->with('msg', 'Imagem salva com sucesso!');
                    }else{

                        //return redirect()->route('gallery.uploadimages')->with('msgerror', 'Selecione um diretório!');
                    }
                    
                }

            }
        }
    }

    // exclui uma única imagem --FASE DE APRIMORAMENTO
    public function destroy($nameimg)
    {
        $gallery = DB::table('galleries')->where('filename', $nameimg)->get();
        foreach($gallery as $foto){
                
            $delete_image = Storage::disk('public')->delete($foto->folders.'/'.$foto->filename);
            if($delete_image){
                DB::table('galleries')->where('filename', $foto->filename)->delete();
                echo 'imagem deletada com sucesso!';
            }else{
                echo 'ainda nao foi dessa vez!';
            }
                
        }       
        //fazer o delete de mais e uma imagem ao mesmo tempo
    }

    //Cria um diretório na pasta publíca do sistema
    public function makeDirectorie(Request $request)
    {
        $request->validate([
            'create_dir' => ['string', 'min:4']
        ]);

        $directory = $request->only('create_dir');

        Storage::disk('public')->makeDirectory($directory['create_dir']);

        return redirect()->route('gallery.uploadimages'); //resposta de criação feita com sucesso!

    }

    // Exclui um diretório com seus arquivos no banco de dados
    public function destroyFolder($directory)
    {
        $deletedir = Storage::disk('public')->deleteDirectory($directory);

        if ($deletedir) {

            DB::table('galleries')->where('folders', $directory)->delete();

            return redirect()->route('gallery.uploadimages'); // enviar msg de exclusão
        }
    }
}
