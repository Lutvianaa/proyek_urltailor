<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Mitra;
 
class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mitra = Mitra::all();
        return view ('mitra.index', compact('mitra'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mitra.create');
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
        $fileName = time().$request->file('logo')->getClientOriginalName();
        $path = $request->file('logo')->storeAs('images', $fileName, 'public');
        $requestData["logo"] = '/storage/'.$path;
        Mitra::create($requestData);
        return redirect('mitra')->with('flash_message', 'Mitra berhasil ditambahkan!');
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
    $mitra = Mitra::findOrFail($id);
    return view('mitra.edit', compact('mitra'));
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
        $mitra = Mitra::findOrFail($id);

        if ($request->hasFile('logo')) {
            $fileName = time() . $request->file('logo')->getClientOriginalName();
            $path = $request->file('logo')->storeAs('images', $fileName, 'public');
            $requestData["logo"] = '/storage/' . $path;
        }

        $mitra->update($requestData);

        return redirect('mitra')->with('flash_message', 'Data mitra berhasil diperbarui!');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mitra = Mitra::findOrFail($id);
        $mitra->delete();

        return redirect('mitra')->with('flash_message', 'Data mitra berhasil dihapus!');
    }

}