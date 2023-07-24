<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Proposal;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function index(){
        $dataProposal = Proposal::all();
        return view("backend.admin.proposal.index", compact("dataProposal"));
    }

    public function create(){
        return view("backend.admin.proposal.create");
    }

    public function store(Request $request){

        if ($request->file("penelitian_terkait")) {
            $file = $request->file("penelitian_terkait")->store("document-penelitian", "public");
        }

        Proposal::create([
            "npm"=>$request->input("npm"),
            "judul"=>$request->input("judul"),
            "latar_belakang"=>$request->input("latar_belakang"),
            "tujuan_penelitian"=>$request->input("tujuan_penelitian"),
            "manfaat_penelitian"=>$request->input("manfaat_penelitian"),
            "penelitian_terkait"=>$file,
            "pembimbing1"=>$request->input("pembimbing1"),
            "pembimbing2"=>$request->input("pembimbing2"),
        ]);

        return redirect()->route("index-proposal");
    }

    public function edit($id){
        $dataProposal = Proposal::where("id", $id)->first();
        return view("backend.admin.proposal.edit", compact("dataProposal"));
    }

    public function update(Request $request, $id){
        $dataProposal = Proposal::where("id", $id)->first();
        $dataProposal->update([
            "npm"=>$request->input("npm"),
            "judul"=>$request->input("judul"),
            "latar_belakang"=>$request->input("latar_belakang"),
            "tujuan_penelitian"=>$request->input("tujuan_penelitian"),
            "manfaat_penelitian"=>$request->input("manfaat_penelitian"),
            "penelitian_terkait"=>$request->input("penelitian_terkait"),
            "pembimbing1"=>$request->input("pembimbing1"),
            "pembimbing2"=>$request->input("pembimbing2"),
        ]);
        return redirect()->route("index-proposal");
    }

    function delete($id){
        $dataProposal = Proposal::where("id", $id)->first();
        $dataProposal->delete();
        return redirect()->route("index-proposal"); 
    }
}
