<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Holiday;
use Illuminate\Support\Facades\Hash;

class HolidaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $holidays = Holiday::all()->where('isActive', 1);
        return view('holidays.index')->with('holidays', $holidays);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('holidays.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'image_url' => 'image|required|max:5000 '

        ]);

        if ($request->hasFile('image_url')) {
            $fileWithExt = $request->file('image_url')->getClientOriginalName();
            $filename = pathinfo($fileWithExt, PATHINFO_FILENAME);
            $extention = $request->file('image_url')->getClientOriginalExtension();

            $fileNameToStore = $filename . '_' . time() . '.' . $extention;
            $request->file('image_url')->storeAs('public/assets', $fileNameToStore);
        }
        $newHoliday = new Holiday;
        $newHoliday->image_url = $fileNameToStore;
        $newHoliday->iframe_url = $request->input('iframe_url');
        $newHoliday->name = $request->input('title');
        $newHoliday->save();

        return redirect()->to('/admin')->with('message', 'Успешно добавена оферта!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $holiday = Holiday::find($id);
//        return view('holidays.single-holiday')->with('holiday', $holiday);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Holiday::where('id', $id)->update(array('isActive' => false));
        return redirect('/admin')->with('message', 'Успешно изтрита оферта!');
    }
}
