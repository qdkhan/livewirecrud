<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Livewire Project</title>
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        /* Firefox */
        input[type=number] {
        -moz-appearance: textfield;
        }
    </style>
    @livewireStyles
</head>
<body>
   {{$slot}} 
   
@livewireScripts
<script>
    var myModal = new bootstrap.Modal(document.getElementById('addStudentModel'), {
    keyboard: false
    })
    window.livewire.on('studentAdded', ()=>{
        myModal.hide();
    });

    var myModal = new bootstrap.Modal(document.getElementById('updateStudentModel'), {
    keyboard: false
    })
    window.livewire.on('studentUpdated', ()=>{
        myModal.hide();
    });

    // formId = document.querySelector('#multiImgUpload');
    window.livewire.on('imageUploaded', ()=>{
        document.querySelector('#multiImgUpload').reset();
    });

   /* function imgUpload(event) {
    //One Way
    const file = event.target.files[0];
    const url = URL.createObjectURL(file);
    var output = document.querySelector('.showImg');
    output.src = url
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
     //Another Way
    var output = document.querySelector('.showImg');
    var reader = new FileReader();
    reader.onload = function() {
        output.src = reader.result
    }
    reader.readAsDataURL(event.target.files[0]);
   } */
</script>
</body>
</html>