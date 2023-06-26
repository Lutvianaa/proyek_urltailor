<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Rumahjahit;
 
class RumahjahitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rumahjahit = Rumahjahit::all();
        return view ('rumahjahit.index', compact('rumahjahit'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rumahjahit.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        // $fileName = time().$request->file('logo')->getClientOriginalName();
        // $path = $request->file('logo')->storeAs('images', $fileName, 'public');
        // $requestData["logo"] = '/storage/'.$path;
        Rumahjahit::create($requestData);
        return redirect('rumahjahit')->with('flash_message', 'Rumahjahit berhasil ditambahkan!');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $rumahjahit = Rumahjahit::findOrFail($id);
    return view('rumahjahit.edit', compact('rumahjahit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        $rumahjahit = Rumahjahit::findOrFail($id);

        // if ($request->hasFile('logo')) {
        //     $fileName = time() . $request->file('logo')->getClientOriginalName();
        //     $path = $request->file('logo')->storeAs('images', $fileName, 'public');
        //     $requestData["logo"] = '/storage/' . $path;
        // }

        $rumahjahit->update($requestData);

        return redirect('rumahjahit')->with('flash_message', 'Data testimoni berhasil diperbarui!');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rumahjahit = Rumahjahit::findOrFail($id);
        $rumahjahit->delete();

        return redirect('rumahjahit')->with('flash_message', 'Data testimoni berhasil dihapus!');
    }

}