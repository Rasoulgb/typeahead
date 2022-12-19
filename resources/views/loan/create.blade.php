<!DOCTYPE html>

<head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" />
    <style>
        .container {
            max-width: 600px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div classs="form-group">
   
            <input type="text" id="title" name="title" placeholder="Search" class="form-control" />
        </div>
   
        
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js">
    </script>
    <script type="text/javascript">
        var route = "{{ url('autocomplete-search') }}";
        $('#title').typeahead({
            source: function (query, process) {
                return $.get(route, {
                    query: query
                }, function (data) {
                    return process(data);
                });
            }
        });
    </script>
    </form>
</body>
</html>