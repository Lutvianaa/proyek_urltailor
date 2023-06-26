<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Layanan;
 
class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layanan = Layanan::all();
        return view ('layanan.index', compact('layanan'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layanan.create');
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
        $fileName = time().$request->file('foto')->getClientOriginalName();
        $path = $request->file('foto')->storeAs('images', $fileName, 'public');
        $requestData["foto"] = '/storage/'.$path;
        Layanan::create($requestData);
        return redirect('layanan')->with('flash_message', 'Layanan berhasil ditambahkan!');
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
    $layanan = Layanan::findOrFail($id);
    return view('layanan.edit', compact('layanan'));
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
        $layanan = Layanan::findOrFail($id);

        if ($request->hasFile('foto')) {
            $fileName = time() . $request->file('foto')->getClientOriginalName();
            $path = $request->file('foto')->storeAs('images', $fileName, 'public');
            $requestData["foto"] = '/storage/' . $path;
        }

        $layanan->update($requestData);

        return redirect('layanan')->with('flash_message', 'Data layanan berhasil diperbarui!');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $layanan = Layanan::findOrFail($id);
        $layanan->delete();

        return redirect('layanan')->with('flash_message', 'Data layanan berhasil dihapus!');
    }

}