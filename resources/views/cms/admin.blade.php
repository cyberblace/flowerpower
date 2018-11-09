<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">


    <title>CMS Admin</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#projects').DataTable( {
                columnDefs: [ {
                    targets: [1, 3, 5, 6],
                    render: function ( data, type, row ) {
                        return type === 'display' && data.length > 20    ?
                            data.substr( 0, 20 ) +'…' :
                            data;
                    }
                } ]
            } );
        } );
    </script>

    <link href="/css/admin.css" rel="stylesheet">

</head>
<body>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 text-left">
                <a href="/"><img class="logo" src="/images/tim_rebersb.png"></a>

            </div>
            <div class="col-lg-7">

            </div>
            <div class="col-lg-1" style="padding-top: 12px; float: right;">
                <a href="/logout"><button class="btn btn-secondary">Log Out</button></a>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <h1>Projecten</h1>
    <hr>
    <div class="row no-gutters">
        <table id="projects" class="display" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Project Name</th>
                <th>Client</th>
                <th>Client's Website</th>
                <th>Skills Used</th>
                <th>Year</th>
                <th>Duration</th>
                <th>Short Description</th>
                <th>Created</th>
                <th style="background-image:none;"></th>
                <th style="background-image:none;"><a href="/project/create"><span class="glyphicon glyphicon-plus"></span></a></th>
            </tr>
            </thead>
            <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>{{$project->name}}</td>
                    <td>{{$project->client}}</td>
                    <td>{{$project->client_site}}</td>
                    <td>{{$project->skills_used}}</td>
                    <td>{{$project->year}}</td>
                    <td>{{$project->duration}}</td>
                    <td>{{$project->short_text}}</td>
                    <td>{{$project->created_at->toFormattedDateString()}}</td>
                    <td><a href="/project/{{$project->id}}/edit"><span class="glyphicon glyphicon-pencil"></span></a></td>
                    <td><a href="{{route('portfolio.delete', [$project->id])}}" ><span class="glyphicon glyphicon-trash"></span></a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


</body>
</html>

