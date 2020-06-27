<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Prueba</title>
    <?php
        include ('includes-head.php');
    ?>
</head>
<body>
<div class="container">
    <div class="container">
    <div class="card">
 <div class="card-body">
     <h4 class="card-title">Título Tabla</h4>
     <h6 class="card-subtitle">Descripción Tabla</h6>
     <table id="demo-foo-addrow2" class="table table-bordered table-stripped table-hover toggle-circle" data-page-size="7">
         <thead>
             <tr>
                 <th data-sort-initial="true" data-toggle="true">First Name</th>
                 <th>Last Name</th>
                 <th data-hide="phone, tablet">Job Title</th>
                 <th data-hide="phone, tablet">DOB</th>
                 <th data-hide="phone, tablet">Status</th>
                 <th data-sort-ignore="true" class="min-width">Delete</th>
             </tr>
         </thead>
         <div class="m-t-40">
             <div class="d-flex">
                 <div class="mr-auto">
                     <div class="form-group">
                         <button id="demo-btn-addrow" class="btn btn-primary "><i class="fa fa-plus ml-2 mr-2" ></i>Add New Row
                         </button>
                         <small>New row will be added in last page.</small> </div>
                 </div>
                 <div class="ml-auto">
                     <div class="form-group">
                         <i class="fa fa-search"></i>
                         <input id="demo-input-search2" type="text" placeholder="Search" autocomplete="off">
                     </div>
                 </div>
             </div>
         </div>
         <tbody>
             <tr>
                 <td>Shona</td>
                 <td>Woldt</td>
                 <td>Airline Transport Pilot</td>
                 <td>3 Oct 2017</td>
                 <td><span class="label label-table label-success">Active</span> </td>
                 <td>
                     <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                 </td>
             </tr>
             <tr>
                 <td>Lizzee</td>
                 <td>Goodlow</td>
                 <td>Technical Services Librarian</td>
                 <td>1 Nov 2014</td>
                 <td><span class="label label-table label-danger">Suspended</span> </td>
                 <td>
                     <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                 </td>
             </tr>
             <tr>
                 <td>Isidra</td>
                 <td>Boudreaux</td>
                 <td>Traffic Court Referee</td>
                 <td>22 Jun 2014</td>
                 <td><span class="label label-table label-success">Active</span> </td>
                 <td>
                     <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                 </td>
             </tr>
             <tr>
                 <td>Doris</td>
                 <td>Michael</td>
                 <td>Business Services Sales Representative</td>
                 <td>19 Apr 2013</td>
                 <td><span class="label label-table label-danger">Suspended</span> </td>
                 <td>
                     <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                 </td>
             </tr>
             <tr>
                 <td>Lauri</td>
                 <td>Hyland</td>
                 <td>Blackjack Supervisor</td>
                 <td>15 Nov 2014</td>
                 <td><span class="label label-table label-danger">Suspended</span> </td>
                 <td>
                     <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                 </td>
             </tr>
             <tr>
                 <td>Maple</td>
                 <td>Halladay</td>
                 <td>Aviation Tactical Readiness Officer</td>
                 <td>30 Dec 2017</td>
                 <td><span class="label label-table label-danger">Suspended</span> </td>
                 <td>
                     <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                 </td>
             </tr>
             <tr>
                 <td>Lorraine</td>
                 <td>Mcgaughy</td>
                 <td>Hemodialysis Technician</td>
                 <td>11 Nov 2014</td>
                 <td><span class="label label-table label-success">Active</span> </td>
                 <td>
                     <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                 </td>
             </tr>
             <tr>
                 <td>Judi</td>
                 <td>Badgett</td>
                 <td>Electrical Lineworker</td>
                 <td>23 Jun 2013</td>
                 <td><span class="label label-table label-success">Active</span> </td>
                 <td>
                     <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                 </td>
             </tr>
             <tr>
                 <td>Granville</td>
                 <td>Leonardo</td>
                 <td>Business Services Sales Representative</td>
                 <td>19 Apr 2013</td>
                 <td><span class="label label-table label-danger">Suspended</span> </td>
                 <td>
                     <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                 </td>
             </tr>
             <tr>
                 <td>Lauri</td>
                 <td>Hyland</td>
                 <td>Blackjack Supervisor</td>
                 <td>15 Nov 2014</td>
                 <td><span class="label label-table label-danger">Suspended</span> </td>
                 <td>
                     <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                 </td>
             </tr>
             <tr>
                 <td>Maple</td>
                 <td>Halladay</td>
                 <td>Aviation Tactical Readiness Officer</td>
                 <td>30 Dec 2017</td>
                 <td><span class="label label-table label-danger">Suspended</span> </td>
                 <td>
                     <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                 </td>
             </tr>
             <tr>
                 <td>Lorraine</td>
                 <td>Mcgaughy</td>
                 <td>Hemodialysis Technician</td>
                 <td>11 Nov 2014</td>
                 <td><span class="label label-table label-success">Active</span> </td>
                 <td>
                     <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                 </td>
             </tr>
             <tr>
                 <td>Judi</td>
                 <td>Badgett</td>
                 <td>Electrical Lineworker</td>
                 <td>23 Jun 2013</td>
                 <td><span class="label label-table label-success">Active</span> </td>
                 <td>
                     <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                 </td>
             </tr>
             <tr>
                 <td>Granville</td>
                 <td>Leonardo</td>
                 <td>Business Services Sales Representative</td>
                 <td>19 Apr 2013</td>
                 <td><span class="label label-table label-danger">Suspended</span> </td>
                 <td>
                     <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                 </td>
             </tr>
             <tr>
                 <td>Lauri</td>
                 <td>Hyland</td>
                 <td>Blackjack Supervisor</td>
                 <td>15 Nov 2014</td>
                 <td><span class="label label-table label-danger">Suspended</span> </td>
                 <td>
                     <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                 </td>
             </tr>
             <tr>
                 <td>Easer</td>
                 <td>Dragoo</td>
                 <td>Drywall Stripper</td>
                 <td>13 Dec 2014</td>
                 <td><span class="label label-table label-success">Active</span> </td>
                 <td>
                     <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                 </td>
             </tr>
             <tr>
                 <td>Maple</td>
                 <td>Halladay</td>
                 <td>Aviation Tactical Readiness Officer</td>
                 <td>30 Dec 2017</td>
                 <td><span class="label label-table label-danger">Suspended</span> </td>
                 <td>
                     <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                 </td>
             </tr>
             <tr>
                 <td>Maria</td>
                 <td>Tangeli</td>
                 <td>Drywall Stripper</td>
                 <td>21 May 2014</td>
                 <td><span class="label label-table label-success">Active</span> </td>
                 <td>
                     <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                 </td>
             </tr>
             <tr>
                 <td>Maple</td>
                 <td>Halladay</td>
                 <td>Aviation Tactical Readiness Officer</td>
                 <td>30 Dec 2017</td>
                 <td><span class="label label-table label-danger">Suspended</span> </td>
                 <td>
                     <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                 </td>
             </tr>
             <tr>
                 <td>Easer</td>
                 <td>Dragoo</td>
                 <td>Drywall Stripper</td>
                 <td>13 Dec 2014</td>
                 <td><span class="label label-table label-success">Active</span> </td>
                 <td>
                     <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                 </td>
             </tr>
             <tr>
                 <td>Maple</td>
                 <td>Halladay</td>
                 <td>Aviation Tactical Readiness Officer</td>
                 <td>30 Dec 2017</td>
                 <td><span class="label label-table label-danger">Suspended</span> </td>
                 <td>
                     <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                 </td>
             </tr>
         </tbody>
         <tfoot>
             <tr>
                 <td colspan="6">
                     <div class="text-right">
                         <ul class="pagination">
                         </ul>
                     </div>
                 </td>
             </tr>
         </tfoot>
     </table>
 </div>
                        </div>
    </div>
</div>

<?php
        include ('includes-body.php');
    ?>
</body>
</html>