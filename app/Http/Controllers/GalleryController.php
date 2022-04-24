<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Gallery;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

//use App\Http\Requests\GalleryRequest;

class GalleryController extends Controller
{
    //trás informoçoes de todas as imagens e seus diretórios/
    public function showGallery()
    {
        //aqui tenho que trazer do 'db' todas as fotos e mostrar elas na view abaixo
        //dividindo por temas(encontro batismo celulas e outros)
        //fazer modal ao clicar em uma unica ** ENVIAR ESSA FUNÇAO PARA SITE!!!

        $gallery = Gallery::all();
            
        $teste = DB::table('galleries')->select('filename')->get();

        /*
        foreach($teste as $t){
            $d = explode('/', $t->filename);           
        }
        */
        return view('admin.show_gallery', [
            'galleries' => $teste,
            'array' => $gallery
        ]);
    }

    // controla o form_gallery enviando dados
    public function index()
    {
        $folders = Storage::disk('public')->directories();

        return view('admin.form_gallery', [
            'folders' => $folders
        ]);
    }


    /*VERSÃO ANTERIOR SERÁ DESCONTINUADA
    public function store(Request $request)
    {
        $request->validate([
            'files*' => ['required','image','mimes:jpeg,png,jpg'],
        ]);
                
                foreach( $request->file('files') as $file){

                    $extension = $file->extension();
                    $filename = time().rand(0,99).'.'.$extension;
                    
                    $teste = $request->all();
                    //fechar deipois do teste////////////////////////
                    if($teste['options'] == 1){
                        $filename->move(public_path('stanleywdson'));
                        echo 'salvo na pasta encontro';
                    }elseif($teste['options'] == 2){
                        $filename->store('batismo');
                        echo 'salvo na pasta batismo';
                    }elseif($teste['options'] == 3){
                        $filename->store('celulas');
                        echo 'salvo na pasta celulas';
                    }elseif($teste['options'] == 4){
                        $filename->store('outros');
                        echo 'salvo na pasta outros';
                    }
                    /////////////////////////////////////////////
                    
                    $gallery = new Gallery;
                    $gallery->filename = $filename;
                    $gallery->save();
                    
                }
                

                
           
    }
    */

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
                    $path = Storage::disk('public')->put($options['options'], $file);

                    Gallery::create([

                        'filename' => $path,
                        'folders' => $options['options']
                    ]);
                }
            }
        } else {
            return redirect()->route('gallery.uploadimages');//mudar para um alert
        }
    }

    // exclui uma única imagem
    public function destroy($id) //função funcionando mas precisando de ajustes
    {
        $gallery = Gallery::find($id);

        $delete_image = Storage::disk('public')->delete($gallery->filename);

        if ($delete_image) {
            $gallery->delete();
            echo 'imagem deletada com sucesso!';
        } else {
            echo 'arquivo não existe!';
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

        return redirect()->route('gallery.uploadimages');//resposta de criação feita com sucesso!

    }

    // Exclui um diretório com seus arquivos no banco de dados
    public function destroyFolder($directory)
    {
           $deletedir = Storage::disk('public')->deleteDirectory($directory);

           if($deletedir){

                DB::table('galleries')->where('folders', $directory)->delete();

                return redirect()->route('gallery.uploadimages');// enviar msg de exclusão
           }  
    }
}
