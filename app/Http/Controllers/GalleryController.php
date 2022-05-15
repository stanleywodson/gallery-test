<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    //trás informoçoes de todas as imagens e seus diretórios/
    public function showGallery($directory)
    {
        //fazer modal ao clicar em uma unica imagem** !!!
        $folders = DB::table('galleries')->where('folders', $directory)->get();
        return view('admin.dashboard.show_gallery', [
            'images' => $folders
        ]);
    }
    public function delFoto()
    {
        $folders = Storage::disk('public')->directories();
        return view('admin.dashboard.del_fotos',['folders'=>$folders]);
    }
    // exclui uma única imagem --FASE DE APRIMORAMENTO
    public function destroy($nameimg)
    {
        $gallery = DB::table('galleries')->where('filename', $nameimg)->get();

        foreach ($gallery as $foto) {

            $delete_image = Storage::disk('public')->delete($foto->folders . '/' . $foto->filename);

            if ($delete_image) {

                DB::table('galleries')->where('filename', $foto->filename)->delete();
                return redirect()->route('gallery.show', ['directory' => $foto->folders])->with('msgf', 'Foto excluida com sucesso!');
            }
        }
    }
    //formulário de add de diretório e suas fotos GET
    public function showFormImages()
    {
        $folders = Storage::disk('public')->directories();

        return view('admin.dashboard.add_foto', ['folders' => $folders]);
    }

    // Adiciona imagens e a pasta onde foi gravada, no banco de dados POST
    public function addimages(Request $request)
    {
        $request->validate([
            'files*' => ['required', 'image', 'mimes:jpeg,png,jpg']
        ]);

        if ($request->hasfile('files') && !$request->options == 0) {

            foreach ($request->file('files') as $file) {

                $path = Storage::disk('public')->put($request->options, $file);
                $path2 = explode('/', $path);

                $gallery = Gallery::create([
                    'filename' => $path2[1],
                    'folders' => $request->options
                ]);
            }
            if ($gallery)

                return redirect()->route('gallery.showFormImages')->with('msggr', 'Imagem salva com sucesso!');
        }

        return redirect()->route('gallery.showFormImages')->with('msgp', 'Selecione o diretório e/ou images');
    }

    //trás o input para criação do diretório//e manda as pastas para exclusaod
    public function showDir()
    {
        $folders = Storage::disk('public')->directories();
        
        return view('admin.dashboard.create_dir', ['folders' => $folders]);
    }

    //Cria um diretório na pasta publíca do sistema
    public function makeDirectorie(Request $request)
    {
        $request->validate([
            'create_dir' => ['string', 'min:4']
        ]);

        Storage::disk('public')->makeDirectory($request->create_dir);

        return redirect()->route('gallery.showdir')->with('msg', 'Diretório criado com sucesso!'); //resposta de criação feita com sucesso!

    }

    // Exclui um diretório com seus arquivos no banco de dados
    public function destroyFolder($directory)
    {
        $deletedir = Storage::disk('public')->deleteDirectory($directory);

        if ($deletedir) {

            DB::table('galleries')->where('folders', $directory)->delete();

            return redirect()->route('gallery.showdir')->with('msgex', 'Diretório excluido com sucesso!');
        }
    }
}
