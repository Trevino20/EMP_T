<!doctype html>
<html lang="en">
    <head>
        <title>Employee Table</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
  
    
    </head>

    <body>
        <div class="container py-5">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Employee Table in Laravel
                    </h5>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped datatable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Designations</th>
                                <th>Contact</th>
                                <th>Gender</th>
                            </tr>
                        </thead>
                        <!-- <tbody>
                            @forelse($emps as $emp)
                            <tr>
                                <td>{{$emp->name}}</td>
                                <td>{{$emp->email}}</td>
                                <td>{{$emp->desig}}</td>
                                <td>{{$emp->contact}}</td>
                                <td>{{$emp->gender}}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan ="4">
                                    No Data Found!
                                </td>
                            </tr>
                            @endforelse


                        </tbody> -->

                    </table>
                </div>

            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
         integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <!-- Bootstrap JavaScript Libraries -->
        

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        ></script>
        <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.datatable').DataTable(
                    {
                        serverSide: true,
                        processing: true,
                        ajax:{
                            url: '{{ route("emp.index") }}'
                        }
                    }
                );
    
            
            
        });
</script>
   
     </body>
</html>