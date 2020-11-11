<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoryController extends Controller
{
    public function index()
    {
        $file = base_path('storage/app/public/data.json');
        $artikel = json_decode(file_get_contents($file));
        // dd($artikel);
        return view('story', compact(['artikel']));
    }
    public function buatstory()
    {
        return view('buatstory');
    }
    public function store(Request $request)
    {
        $file = Storage::get('public/data.json');
        $data = json_decode($file, true);

        $idlist = array_column($data, 'no');
        $auto_increment_id = end($idlist);

        $data[] = array(
            'no' => $auto_increment_id+1,
            'judul' => $request->input('judul'),
            'author' => $request->input('author'),
            'keterangan' => $request->input('keterangan'),
        );

        $jsonFile = json_encode($data, JSON_PRETTY_PRINT);
        $file = Storage::put("public/data.json", $jsonFile);
        return redirect()->route('story');
   
    }
    public function edit($no)
    {
        $file = Storage::get('public/data.json');
        $artikel = json_decode($file, true);

        $data = $artikel[$no];

        return view('edit', compact('data'));
    }
    public function hapus($no)
    {
        $file = base_path('storage/app/public/data.json');
        $getJson = file_get_contents($file);
        $artikel = json_decode($getJson, true);

        array_splice($artikel, $no, 1);

        $jsonFile = json_encode($artikel, JSON_PRETTY_PRINT);
        $getJson = file_put_contents($file, $jsonFile);

        return redirect()->route('story')->with(['artikel' => $artikel]);
    }
    public function update(Request $request, $no)
    {
        $file = Storage::get('public/data.json');
        $data = json_decode($file, true);

        $data[$no-1] = array(
            'no' => $request->no,
            'judul' => $request->judul,
            'author' => $request->author,
            'keterangan' => $request->keterangan,
        );

        $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
        $file = Storage::put("public/data.json", $jsonfile);

        return redirect('/');
    }
}
