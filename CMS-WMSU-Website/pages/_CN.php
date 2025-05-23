<?php 
session_start();
require_once '../classes/db_connection.class.php';
require_once '../classes/pages.class.php';
$dbObj = new Database;
$cnPage = new Pages;


if (empty($_SESSION['account'])){ 
    header('Location: login-form.php');
    exit;
}
else{
    $pageID = 3;
    $subpageID = 2;

    // Fetch fresh data from the database
    $_SESSION['cnPage'] = $cnPage->fetchPageData($pageID, $subpageID);
    $_SESSION['cnPage']['CarouselElement'] = $cnPage->fetchSectionsByIndicator('Carousel Element');
    $_SESSION['cnPage']['CardElementFront'] = $cnPage->fetchSectionsByIndicator('Card Element Front');
    $_SESSION['cnPage']['CardElementBack'] = $cnPage->fetchSectionsByIndicator('Card Element Back');
    $_SESSION['cnPage']['AccordionCourses'] = $cnPage->fetchSectionsByIndicator('Accordion Courses');
    $_SESSION['cnPage']['AccordionCoursesUndergrad'] = $cnPage->fetchSectionsByIndicator('Accordion Courses Undergrad');
    $_SESSION['cnPage']['AccordionCoursesGrad'] = $cnPage->fetchSectionsByIndicator('Accordion Courses Grad');

    // Update session data
    $pageData = $_SESSION['cnPage'];

    $sections = [
        'CarouselElement' => $_SESSION['cnPage']['CarouselElement'],
        'CardElementFront' => $_SESSION['cnPage']['CardElementFront'],
        'CardElementBack' => $_SESSION['cnPage']['CardElementBack'],
        'AccordionCourses' => $_SESSION['cnPage']['AccordionCourses'],
        'AccordionCoursesUndergrad' => $_SESSION['cnPage']['AccordionCoursesUndergrad'],
        'AccordionCoursesGrad' => $_SESSION['cnPage']['AccordionCoursesGrad'],
    ];
}
?>

<head>
<title>Academics Page</title>
<?php require_once '../__includes/head.php' ?>
<link rel="stylesheet" href="../css/academics-page.css">
</head>
    
<?php require_once '../__includes/navbar.php'?>
<?php require_once '../__includes/sidebar.php'; ?>

<body>

<?php 
$x = 0;
$tableIds = [];
foreach ($sections as $section => $data) {
    $x++;
    if (!empty($data) && is_array($data)) { 
        $tableId = "datatable" . $x;
        $tableIds[] = $tableId;
        echo "<div class='section'>";
        echo "<h2>" . preg_replace('/([a-z])([A-Z])/', '$1 $2', $section) . "</h2>";
        echo "<hr class='border border-primary border-3 opacity-75'>"; 
?>

        <table id='<?php echo $tableId?>'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Indicator</th>
                    <th>Type</th>
                    <th>Content</th>
                    <th>Description</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($data as $data2) { ?>
                <tr>
                    <td><?php echo $data2['sectionID'] ?? ''; ?></td>
                    <td><?php echo $data2['indicator'] ?? ''; ?></td>
                    <td><?php echo $data2['elemType'] ?? ''; ?></td>

                    <td>
                        <input type="text" 
                            class="editable-input" 
                            data-id="<?php echo $data2['sectionID']; ?>" 
                            data-column="<?php echo ($data2['elemType'] === 'text') ? 'content' : 'imagePath'; ?>"
                            value="<?php echo ($data2['elemType'] === 'text') ? ($data2['content'] ?? '') : ($data2['imagePath'] ?? ''); ?>">
                        </td>

                    <td><?php echo $data2['description'] ?? ''; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

<?php
        echo "</div>";
    }
}
?>

<script>
   $(document).ready(function() {
    <?php foreach ($tableIds as $id) { ?>
        $('#<?php echo $id; ?>').DataTable({
            "autoWidth": false,
            "paging": true,
            "ordering": false,
            "info": false
        });
    <?php } ?>

    $('.editable-input').on('blur', function(){
        var input = $(this);
        var newValue = input.val().trim();
        var rowId = input.data('id');
        var column = input.data('column');

        console.log("Row ID:", rowId, "Column:", column, "Value:", newValue)

        $.ajax({
            url: '../functions/updateData.php',
            type: 'POST',
            data: {
                id: rowId,
                value: newValue,
                column: column
            },
            success: function(response) {
                console.log("Updated Successfully:", response);
                input.val(response.updatedData[column]); 

                // setTimeout(function() {
                //     location.reload();
                // }, 500);
            },

            error: function() {
                alert("Error updating data.");
            }
        });
    });
});
</script>
</body>
