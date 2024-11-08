<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>
    <div class="alert alert-primary" role="alert">
    A simple primary alert—check it out!
    </div>
    <div class="alert alert-secondary" role="alert">
    A simple secondary alert—check it out!
    </div>
    <div class="alert alert-success" role="alert">
    A simple success alert—check it out!
    </div>
    <div class="alert alert-danger" role="alert">
    A simple danger alert—check it out!
    </div>
    <div class="alert alert-warning" role="alert">
    A simple warning alert—check it out!
    </div>
    <div class="alert alert-info" role="alert">
    A simple info alert—check it out!
    </div>
    <div class="alert alert-light" role="alert">
    A simple light alert—check it out!
    </div>
    <div class="alert alert-dark" role="alert">
    A simple dark alert—check it out!
    </div> 
        <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div>
</body>
</html>