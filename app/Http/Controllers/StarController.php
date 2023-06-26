<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Star;
 
class StarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $star = Star::all();
        return view ('star.index', compact('star'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('star.create');
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
        Star::create($requestData);
        return redirect('star')->with('flash_message', 'Star berhasil ditambahkan!');
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
    $star = Star::findOrFail($id);
    return view('star.edit', compact('star'));
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
        $star = Star::findOrFail($id);

        // if ($request->hasFile('logo')) {
        //     $fileName = time() . $request->file('logo')->getClientOriginalName();
        //     $path = $request->file('logo')->storeAs('images', $fileName, 'public');
        //     $requestData["logo"] = '/storage/' . $path;
        // }

        $star->update($requestData);

        return redirect('star')->with('flash_message', 'Data testimoni berhasil diperbarui!');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $star = Star::findOrFail($id);
        $star->delete();

        return redirect('star')->with('flash_message', 'Data testimoni berhasil dihapus!');
    }

}