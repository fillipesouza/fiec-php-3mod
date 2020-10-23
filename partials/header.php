<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="partials/style.css">

    <title>Hello, world!</title>
    <style>
    .login {
  background: linear-gradient(to top right, rgba(1, 9, 12, 0.863), rgba(1, 9, 12, 0.863)),
    url("../../../assets/bg_torneios.png") 50% / cover;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

.container {
  width: 30vw;
  box-shadow: 0px 0px 30px 5px rgba(0, 0, 0, 0.75);
  background-color: #f5f6fb;
  border-radius: 10px;
  padding: 20px 2em 80px;
}

.header {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  margin-bottom: 30px;
}

.header h1 {
  color: #8b9fba;
  margin: 45px 0 0;
}

.form-group {
  margin-bottom: 1em;
  transition: all 0.3s;
}

.form-label {
  font-size: 1.1em;
  color: #aaa;
  background: none;
  display: block;
  opacity: 1;
  transform: translateY(-1.25em);
  transform-origin: 0 0;
  transition: all 0.3s;
  margin-left: 1px;
  cursor: text;
}

.form-control {
  box-shadow: none;
  background-color: rgba(0, 0, 0, 0.02);
  border-radius: 0px;
  border-color: #ccc;
  background: none;
  border-style: none none solid none;
  width: 100%;
  transition: all 0.5s;
  padding: 5px;
  cursor: text;
}

.form-control::placeholder {
  color: transparent;
}

.form-control:focus {
  box-shadow: none;
  outline: none;
  border-color: var(--corPrincipal);
}

.form-control:focus + .form-label,
.form-control:not(:placeholder-shown) + .form-label {
  transform: translateY(-2.5em) scale(0.8);
  font-weight: bold;
  color: #000;
}

.form-group:focus-within {
  transform: scale(1.05, 1.05);
}

.botao {
  display: flex;
  justify-content: center;
}

.botao button {
  padding: 7px 0;
  width: 85%;
  background-color: var(--corPrincipal);
  border: none;
  border-radius: 25px;
}

.botao button:hover {
  background-color: rgb(0, 49, 0);
  transition: 0.6s;
}

.botao button a {
  color: white;
  font-size: 25px;
  font-weight: 600;
}

fieldset {
  border-top: 1px solid #333;
  border-bottom: none;
  border-left: none;
  border-right: none;
  display: block;
  text-align: center;
  margin: 20px 80px;
}

fieldset legend {
  padding: 5px 10px;
}

.cadastre {
  text-align: center;
  margin-top: 10px;
}

.cadastre a {
  color: black;
}

.cadastre a:hover {
  text-decoration: underline;
}

@media (max-width: 768px) {
  .container {
    width: 90%;
  }
}

@media (min-width: 769px) and (max-width: 1200px) {
  .container {
    width: 45%;
  }
}
    </style>
  </head>
  
  <body>