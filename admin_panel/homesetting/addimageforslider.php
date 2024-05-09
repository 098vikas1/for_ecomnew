
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Images</title>
	<link rel="stylesheet" href="css/homesetting.css">
</head>
<body>

<button class="homesetting" onclick="toggleContainer()">slider_satting</button>


<button class="homeabout" onclick="toggleAbout()">About</button>


<div class = "container_about"  id = "container_about" style = "display:none;background-color:red">
<h1>About</h1>
<form action="upload_box.php" method="post" enctype="multipart/form-data">
        <label for="aboutheading">Box 1 Heading</label>
        <input type="text" name="aboutheading" id="aboutheading">
        <label for="box1about">Box 1 About</label>
        <input type="text" name="box1about" id="box1about">
        <label for="box1image">Box 1 Image</label>
        <input type="file" name="box1image" id="box1image">
        <input type="submit" name="submit" value="Upload Images">
    </form>


    

</div>




<div class="container_homesetting" id="container_homesetting" style="display: none; background-color:gray">
    <h1>Upload Images</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="slide1">Select Slide 1 Image:</label>
        <input type="file" name="slide1" id="slide1" accept="image/*">
        <label for="slide2">Select Slide 2 Image:</label>
        <input type="file" name="slide2" id="slide2" accept="image/*">
        <label for="slide3">Select Slide 3 Image:</label>
        <input type="file" name="slide3" id="slide3" accept="image/*">
        <input type="submit" name="submit" value="Upload Images">
    </form>
</div>

<script>







    function toggleContainer() {
        var container = document.getElementById("container_homesetting");
        if (container.style.display === "none") {
            container.style.display = "block";
        } else {
            container.style.display = "none";
        }
    }

    document.addEventListener("click", function(event) {
        var container = document.getElementById("container_homesetting");
        var button = document.querySelector(".homesetting");
        if (event.target !== container && event.target !== button && !container.contains(event.target)) {
            container.style.display = "none";
        }
    });
	
	
	 function toggleAbout() {
        var container = document.getElementById("container_about");
        if (container.style.display === "none") {
            container.style.display = "block";
        } else {
            container.style.display = "none";
        }
    }

    document.addEventListener("click", function(event) {
        var container = document.getElementById("container_about");
        var button = document.querySelector(".homeabout");
        if (event.target !== container && event.target !== button && !container.contains(event.target)) {
            container.style.display = "none";
        }
    });
	
	
	
</script>


</body>
</html>
