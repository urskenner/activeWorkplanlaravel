<!DOCTYPE html>
<html lang="en">
<head>
    <title>Head</title>
</head>

<body>

<!--Start Header-->
<header>
    <ul class="left-list" id="id-left">
        <li class="nav-image"><a href="workplan.php">
                <img class="nav-logo" onclick="tabHighlight('index')" src="../../gif/imagelogo.gif" alt="Logo"></a>
        </li>
        <li class="nav-placeholder"><a id="nav-placeholder-text">Account</a></li>
        <li class="nav-toggle">
            <a href="javascript:void(0);" onclick="toggleMakeResponsive()">&#9776;</a>
        </li>
    </ul>
    <ul class="right-list" id="id-right">
        <li><a id="workplan" onclick="tabHighlight(id)" href="workplan.php">Workplan</a></li>
        <li><a id="planning-employee" onclick="tabHighlight(id)" href="planning-employee.php">Planning</a></li>
        <li><a id="account-employee" onclick="tabHighlight(id)" href="account-employee.php">Account</a></li>
        <li><a id="index" onclick="tabHighlight(id)" href="../general/index.php">Logout</a></li>
    </ul>
</header>

<section class="space-under-header">
    <h2 style="display: none">fakeheading</h2>

</section>


</body>

</html>