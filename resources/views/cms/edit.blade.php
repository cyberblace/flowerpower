<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Edit</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="/css/admin.css" rel="stylesheet">




</head>
<body>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 text-left">
                <a href="/"><img class="logo" src="/images/tim_rebersb.png"></a>

            </div>
            <div class="col-lg-6">

            </div>
            <div class="col-lg-2" style="padding-top: 12px; float: right;">
                <a href="/admin"><button class="btn btn-secondary">Back</button></a>
                <a href="/logout"><button class="btn btn-secondary">Log Out</button></a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <h1>Edit project</h1>
    <hr>
    <form method="post" action="{{route('project.update', [$project])}}" enctype="multipart/form-data">

        {{method_field('PATCH')}}

        {{csrf_field() }}

        <div class="form-group">
            <label for="name">Project Name: *</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$project->name}}" required>
        </div>
        <div class="form-group">
            <label for="client">Client: *</label>
            <input type="text" class="form-control" id="client" name="client" placeholder="Client" value="{{$project->client}}" required>
        </div>
        <div class="form-group">
            <label for="client_site">Client's Website:</label>
            <input type="text" class="form-control" id="client_site" name="client_site" placeholder="Client's Site" value="{{$project->client_site}}">
        </div>
        <div class="form-group">
            <label for="skills_used">Skills Used:</label>
            <input type="text" class="form-control" id="skills_used" name="skills_used" placeholder="Skills" value="{{$project->skills_used}}">
        </div>
        <div class="form-group">
            <label for="year">Year: *</label>
            <input type="text" class="form-control" id="year" name="year" placeholder="Year" value="{{$project->year}}" required>
        </div>
        <div class="form-group">
            <label for="duration">Duration:</label>
            <input type="text" class="form-control" id="duration" name="duration" placeholder="Duration" value="{{$project->duration}}">
        </div>
        <div class="form-group">
            <label for="short_text">Short Description: *</label>
            <textarea type="text" class="form-control" id="short_text" name="short_text" placeholder="Short Description" maxlength="500" style="height:100px"  required>{{$project->short_text}}</textarea>
        </div>
        <div class="form-group">
            <label for="long_text">Long Description: *</label>
            <textarea type="text" class="form-control" id="long_text" name="long_text" placeholder="Long Description" style="height:150px" required>{{$project->long_text}}</textarea>
        </div>
        <label>Current Photos: </label><br>
        <div class="row">
                @foreach($images as $index => $photo)
                    <div class="col-lg-3">
                        <label><a href="{{route('image.destroy', [$project->id, $index])}}"><span class="glyphicon glyphicon-remove indent"></span></a></label><br>
                        <img src="/{{$photo}}" style="max-width: 90%">
                        <br>
                    </div>
                @endforeach
            </div>
        <br>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="photo">Photos:</label><br>
                <input type="file" id="photo" name="photos[]" multiple>
            </div>
        </div>
            <div class="form-group">
                <label for="video">Video:</label><br>
                <input type="file" id="video" name="video">
            </div>
        <br>

        <div class="form-group">
            <button type="submit" class="btn btn-secondary">Save</button>
        </div>
    </form>
</div>
<br>
<br>

</body>
</html>