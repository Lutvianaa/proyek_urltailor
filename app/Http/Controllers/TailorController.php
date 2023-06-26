<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Tailor;
 
class TailorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tailor = Tailor::all();
        return view ('tailor.index', compact('tailor'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tailor.create');
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
        Tailor::create($requestData);
        return redirect('tailor')->with('flash_message', 'Tailor berhasil ditambahkan!');
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
    $tailor = Tailor::findOrFail($id);
    return view('tailor.edit', compact('tailor'));
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
        $tailor = Tailor::findOrFail($id);

        // if ($request->hasFile('logo')) {
        //     $fileName = time() . $request->file('logo')->getClientOriginalName();
        //     $path = $request->file('logo')->storeAs('images', $fileName, 'public');
        //     $requestData["logo"] = '/storage/' . $path;
        // }

        $tailor->update($requestData);

        return redirect('tailor')->with('flash_message', 'Data testimoni berhasil diperbarui!');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tailor = Tailor::findOrFail($id);
        $tailor->delete();

        return redirect('tailor')->with('flash_message', 'Data testimoni berhasil dihapus!');
    }

}