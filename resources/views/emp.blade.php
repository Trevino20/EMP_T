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
    <div class="row">
        <div class="col-xl-8 d-flex align-items-center gap-3 px-4 py-3">
            <label for="gender_dropdown" class="form-label me-2">Gender:</label>
            <div class="col-sm-3">
                <select name="gender" class="form-control" id="gender_dropdown">
                    <option value="">--- Select Gender ---</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <label for="designation_dropdown" class="form-label ms-4 me-2">Designation:</label>
            <div class="col-sm-3">
                <select name="designation" class="form-control" id="designation_dropdown">
                    <option value="">---Select---</option>
                    <option value="Software Developer">Software Developer</option>
                    <option value="Data Scientist">Data Scientist</option>
                    <option value="System Administrator">System Administrator</option>
                    <option value="Network Engineer">Network Engineer</option>
                    <option value="Cybersecurity Analyst">Cybersecurity Analyst</option>
                    <option value="Cloud Engineer">Cloud Engineer</option>
                </select>
            </div>

            <button type="button" name="refresh" id="refresh" class="btn btn-primary ms-4">Refresh</button>
        </div>
    </div>
</div>

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
$(document).ready(function () {
    
    function loadTable(filter_gender = "",filter_designation="") {
        $('.datatable').DataTable({
            processing: true,
            serverSide: true,
            destroy: true, 
            ajax: {
                url: '{{ route("emp.index") }}', 
                type: "GET",
                data: {
                    filter_gender: filter_gender,
                    filter_designation: filter_designation 
                },
            },
            columns: [
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'desig', name: 'desig' },
                { data: 'contact', name: 'contact' },
                { data: 'gender', name: 'gender' },
            ],
        });
    }

    
    loadTable();

    
    $('#gender_dropdown').change(function () {
        const gender = $(this).val();
        const designation = $('#designation_dropdown').val(); 
        loadTable(gender,designation); 
    });

    $('#designation_dropdown').change(function () {
        const gender = $('#gender_dropdown').val();
        const designation = $(this).val(); 
        loadTable(gender,designation); 
    });

    
    $('#refresh').click(function () {
        $('#gender_dropdown').val("");
        $('#designation_dropdown').val(""); 
        loadTable(); 
    });
});
</script>

   
     </body>
</html>