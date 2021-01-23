<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Geometry;
use App\Models\Property;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function create(Request $request)
    {
        $data = [
            'nama_sekolah_dasar' => $request->post('nama_sekolah_dasar'),
            'x' => $request->post('x'),
            'y' => $request->post('y'),
            'alamat_sekolah_dasar' => $request->post('alamat_sekolah_dasar'),
            'status_sekolah_dasar' => $request->post('status_sekolah_dasar'),
            'foto' => $request->post('gambar'),
        ];

        $property = Property::create($data);
        $geometry = Geometry::create([
            'coordinates' => [
                $request->post('x'),
                $request->post('y')
            ]
        ]);

        Feature::create([
            'id_geometry' => $geometry->id_geometry,
            'id_property' => $property->id_property
        ]);


        return redirect('/ProjectGIS/table');
    }
    public function delete($id)
    {
        Feature::find($id)->delete();

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $data = Property::find($id);
        $data->nama_sekolah_dasar = $request->post('nama_sekolah_dasar');
        $data->alamat_sekolah_dasar = $request->post('alamat_sekolah_dasar');
        $data->status_sekolah_dasar = $request->post('status_sekolah_dasar');
        $data->x = $request->post('x');
        $data->y = $request->post('y');
        $data->foto = $request->post('gambar');

        $data->save();

        return redirect('ProjectGIS/table');
    }
}
