<?php
$mainnav = 'about';
include '../headerabout.php';
?>
<br>
<br>
<div class="container">
<img src="../images/valaiweb.svg" alt="Valai Logo" style="width: 128px;">
<h3>Valai - v1.0</h3>
<p>
    Valai is a IT management software that features server monitoring capabalities, <br />Software monitoring capabalities, Inventory Management, Maintenance Jobwork handling, etc
</p>
<h5>Components of Valai</h5>
<table class="table table-bordered">
    <tr>
        <th>Component</th>
        <th>Version</th>
    </tr>
    <tr>
        <td>Bootstrap</td>
        <td>v4.0</td>
    </tr>
    <tr>
        <td>Valai Server</td>
        <td><?php valai::DisplayVerBuild(); ?></td>
    </tr>
    <tr>
        <td>Aves Engine</td>
        <!-- <td>v2.0-r300</td> -->
        <td><?php valai::DisplayAvesEngineVersion(); ?></td>
    </tr>
    <tr>
        <td>ChartJS</td>
        <td>v2.0</td>
    </tr>
    <tr>
        <td>Softview CSS</td>
        <td>v2.0-r55</td>
    </tr>
    <tr>
        <td>Khatral-DB Connector and classes</td>
        <!-- <td>0.0.3-r552</td> -->
        <td><?php valai::DisplayKhatralVersion();?></td>
    </tr>
    <tr>
        <td>Change Log for the latest build</td>
        <td><?php valai::DisplayChangeLog(); ?></td>
    </tr>
    <tr>
        <td>Known Bugs in latest build</td>
        <td><?php valai::KnownBugs(); ?></td>
    </tr>
</table>
<hr>
<h3>PHP Configuration</h3>
<iframe src="phpinfo.php" frameborder="0" class="border bg-white" style="width: 100%; height: 40vh;"></iframe>
<hr>
<h3>License GNU GPL v3.0</h3>
<iframe src="../LICENSE" frameborder="0" class="border bg-white" style="width: 100%; height: 40vh;"></iframe>
<hr>
<h6 class="text-center">ValaiNet is a Open Source software which is licensed under GNU GPL v3 License</h6>
<h6 class="text-center">ValaiNet Logo, ValaiNet Name, Softview Name, Khatral name, Aves Engine Name are a property of Arvin Soft R & D.</h6>
<h6 class="text-center">Icons in the project are the copyright of the respective owners.</h6>
<h6 class="text-center">Components like bootstrap, ChartJS, jquery and other products used in this project are the copyright of the respective owners.</h6>
<h6 class="text-center">&copy; 2020 ValaiNet Project. All Rights Reserved.</h6>
</div>