<?php

namespace App\Http\Controllers;

use App\Formulario;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        \App\Formulario::create($request->all());

    if (isset($_POST['email']) && !empty($_POST['email'])) {
    $nome = addslashes($_POST['name']);
    $telefone = addslashes($_POST['telephone']);
    $email = addslashes($_POST['email']);

    $emailTo = 'elfaisao@hotmail.com';
    $subject = 'Formulário GH';
    $emailBody = "Nome: ".$nome. "\r\n".
                 "Telefone: ".$telefone. "\r\n".
                 "E-mail: ".$email;

    $header = "From: lucasreichert@hotmail.com"."\r\n".
    "Reply-to:".$email."\r\n".
    "X=Mailer:PHP/".phpversion();

    if(mail($emailTo, $subject, $emailBody, $header)) {
        return "Email enviado com sucesso";
    } else {
        return "O email não pode ser enviado";
    }
    }
        return redirect()->route('formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function show(Formulario $formulario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function edit(Formulario $formulario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formulario $formulario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formulario $formulario)
    {
        //
    }
}
