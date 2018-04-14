<?php

function cinta(){
    
    print("<nav class='navbar navbar-expand-lg navbar-dark' style='background-color:#202020;'>
        <a class='navbar-brand' href=''>AccSoft</a>
    <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNavAltMarkup' aria-controls='navbarNavAltMarkup' aria-expanded='false' aria-label='Toggle navigation'>
    <span class='navbar-toggler-icon'></span>
    </button>
    <div class='collapse navbar-collapse' id='navbarNavAltMarkup'>
            <div class='navbar-nav'>
                <a class='nav-item nav-link active'>Inicio <span class='sr-only'>(current)</span></a>
                <a class='nav-item nav-link' href='#'>Enlace 1</a>
                <a class='nav-item nav-link' href='#'>Enlace 2</a>
            </div>
        </div>
    </nav>
    ");

}

function titulo(){
    
    print("<div id='grad'>
        <div class='titulo'>
            <p>AccSoft Corp.</p>
        </div>
    </div>");
}

function footer(){
    print("
    <br>
    <br>
    <br>
    <footer class='footer'>
        <div class='container' style='text-align: right;color:#32bd43 '>
            <p>Acc Soft © Copyright 2018. All Rights Reserved. <a href='#'>Privacy</a> | <a href='#'>Contact</a></p>
        </div>
    </footer>
    ");
    
}
