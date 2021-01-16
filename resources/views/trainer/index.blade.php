@extends('layouts.app')

@section('content')
<div class="flexContainer">
    <div id="login-container">
    <div class="profile-img"></div>
    <h1>
        Marc Smith
    </h1>
    <div class="description">
        Marc Smith is a personal trainer for dogs. He has been training for over 15 years.
    </div>
    <div class="social">
        <a>GitHub</a>
        <a>Twitter</a>
        <a>LinkedIn</a>
    </div>
    <a href="editTrainer/1" class="btn btn-primary trenerDugme">Hire Me</a>
    <footer>
        <div class="likes">
        <p><i class='fa fa-heart'></i></p>
        <p>1.5K</p>
        </div>
        <div class="projects">
        <p>Clients</p>
        <p>154</p>
        </div>
    </footer>
    </div>

    <div id="login-container">
    <div class="profile-img2"></div>
    <h1>
        Jesse Huston
    </h1>
    <div class="description">
        Jesse Huston is a personal trainer for military dogs. She has been training for over 11 years and is a competitive train figure. 
    </div>
    <div class="social">
        <a>GitHub</a>
        <a>Twitter</a>
        <a>LinkedIn</a>
    </div>
    <button>Hire Me</button>
    <footer>
        <div class="likes">
        <p><i class='fa fa-heart'></i></p>
        <p>1.3K</p>
        </div>
        <div class="projects">
        <p>Clients</p>
        <p>78</p>
        </div>
    </footer>
    </div>
</div>
@endsection
