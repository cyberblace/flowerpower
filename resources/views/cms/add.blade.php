<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Create</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
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
    <h1>Add project</h1>
    <hr>
    <form method="post" action="{{route('project.store')}}" enctype="multipart/form-data">

        {{csrf_field() }}

        <div class="form-group">
            <label for="name">Project Name: *</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
        </div>
        <div class="form-group">
            <label for="client">Client: *</label>
            <input type="text" class="form-control" id="client" name="client" placeholder="Client" required>
        </div>
        <div class="form-group">
            <label for="client_site">Client's Website:</label>
            <input type="text" class="form-control" id="client_site" name="client_site" placeholder="Client's Site">
        </div>
        <div class="form-group">
            <label for="skills_used">Skills Used:</label>
            <input type="text" class="form-control" id="skills_used" name="skills_used" placeholder="Skills">
        </div>
        <div class="form-group">
            <label for="year">Year: *</label>
            <input type="text" class="form-control" id="year" name="year" placeholder="Year" required>
        </div>
        <div class="form-group">
            <label for="duration">Duration:</label>
            <input type="text" class="form-control" id="duration" name="duration" placeholder="Duration">
        </div>
        <div class="form-group">
            <label for="short_text">Short Description: *</label>
            <textarea type="text" class="form-control" id="short_text" name="short_text" placeholder="Short Description" maxlength="500" style="height:100px" required></textarea>
        </div>
        <div class="form-group">
            <label for="long_text">Long Description: *</label>
            <textarea type="text" class="form-control" id="long_text" name="long_text" placeholder="Long Description" style="height:150px" required></textarea>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="photo">Photo: *</label><br>
                    <input type="file" id="photo" name="photos[]" multiple required>
                </div>
            </div>
            {{--<div class="col-lg-3">--}}
            {{--<div class="form-group">--}}
            {{--<label for="photo"></label><br>--}}
            {{--<input type="file" id="photo_two" name="photo_two" required>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-3">--}}
            {{--<div class="form-group">--}}
            {{--<label for="photo"> </label><br>--}}
            {{--<input type="file" id="photo_three" name="photo_three" required>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-3">--}}
            {{--<div class="form-group">--}}
            {{--<br>--}}
            {{--<input type="file" id="photo_four" name="photo_four" required>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-4">--}}
            {{--<div class="form-group">--}}
            {{--<br>--}}
            {{--<input type="file" id="photo_five" name="photo_five" required>--}}
            {{--</div>--}}
            {{--</div>--}}
        </div>
        <div class="form-group">
            <label for="video">Video:</label><br>
            <input type="file" id="video" name="video">
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-secondary">Save</button>
        </div>
    </form>
</div>
<br>

</body>
</html>