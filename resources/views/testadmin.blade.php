<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Velo</title>
</head>
<body>
    <h1>Create a New Velo</h1>
    <form action="{{ route('admin.velo.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="Marka">Marka:</label><br>
        <input type="text" id="Marka" name="Marka"><br>
        
        <label for="Model">Model:</label><br>
        <input type="text" id="Model" name="Model"><br>
        
        <label for="Color">Color:</label><br>
        <input type="text" id="Color" name="Color"><br>
        
        <label for="Price">Price:</label><br>
        <input type="number" id="Price" name="Price"><br>
        
        <label for="Count">Count:</label><br>
        <input type="number" id="Count" name="Count"><br>
        
        <label for="Wheel_size">Wheel Size:</label><br>
        <input type="number" step="0.01" id="Wheel_size" name="Wheel_size"><br>
        
        <label for="Rama_size">Rama Size:</label><br>
        <input type="number" step="0.01" id="Rama_size" name="Rama_size"><br>
        
        <label for="Class">Class:</label><br>
        <input type="text" id="Class" name="Class"><br>
        
        <label for="Type_of_brake">Type of Brake:</label><br>
        <input type="text" id="Type_of_brake" name="Type_of_brake"><br>
        
        <label for="Rama_material">Rama Material:</label><br>
        <input type="text" id="Rama_material" name="Rama_material"><br>
        
        <label for="Count_of_speeds">Count of Speeds:</label><br>
        <input type="number" id="Count_of_speeds" name="Count_of_speeds"><br>
        
        <label for="photo">Photo:</label><br>
        <input type="file" id="photo" name="photo"><br>
        
        <!-- Додати поля з таблиці характеристик велосипеда -->
        <label for="Opys">Opys:</label><br>
        <textarea id="Opys" name="Opys"></textarea><br>
        
        <label for="Rama">Rama:</label><br>
        <input type="text" id="Rama" name="Rama"><br>
        
        <label for="Caretka">Caretka:</label><br>
        <input type="text" id="Caretka" name="Caretka"><br>
        
        <label for="Kermova_kolodka">Kermova Kolodka:</label><br>
<input type="text" id="Kermova_kolodka" name="Kermova_kolodka"><br>

<label for="Dodatkovi_character">Dodatkovi Character:</label><br>
<input type="text" id="Dodatkovi_character" name="Dodatkovi_character"><br>

<label for="Vylka">Vylka:</label><br>
<input type="text" id="Vylka" name="Vylka"><br>

<label for="Zadniy_amort">Zadniy Amort:</label><br>
<input type="text" id="Zadniy_amort" name="Zadniy_amort"><br>

<label for="Shatun_system">Shatun System:</label><br>
<input type="text" id="Shatun_system" name="Shatun_system"><br>

<label for="Peredniy_perem">Peredniy Perem:</label><br>
<input type="text" id="Peredniy_perem" name="Peredniy_perem"><br>

<label for="Zadniy_perem">Zadniy Perem:</label><br>
<input type="text" id="Zadniy_perem" name="Zadniy_perem"><br>

<label for="Ruchky_perem">Ruchky Perem:</label><br>
<input type="text" id="Ruchky_perem" name="Ruchky_perem"><br>

<label for="Brake">Brake:</label><br>
<input type="text" id="Brake" name="Brake"><br>

<label for="Oboda">Oboda:</label><br>
<input type="text" id="Oboda" name="Oboda"><br>

<label for="Vtulky">Vtulky:</label><br>
<input type="text" id="Vtulky" name="Vtulky"><br>

<label for="Kermo">Kermo:</label><br>
<input type="text" id="Kermo" name="Kermo"><br>

<label for="Vynis_kerma">Vynis Kerma:</label><br>
<input type="text" id="Vynis_kerma" name="Vynis_kerma"><br>

<label for="Pidsedelnyi_shtyr">Pidsedelnyi Shtyr:</label><br>
<input type="text" id="Pidsedelnyi_shtyr" name="Pidsedelnyi_shtyr"><br>

<label for="Sidlo">Sidlo:</label><br>
<input type="text" id="Sidlo" name="Sidlo"><br>

<label for="Pedali">Pedali:</label><br>
<input type="text" id="Pedali" name="Pedali"><br>

<label for="Complectation">Complectation:</label><br>
<input type="text" id="Complectation" name="Complectation"><br>

<label for="Year">Year:</label><br>
<input type="number" id="Year" name="Year"><br>

<label for="vaga">Vaga:</label><br>
<input type="number" step="0.01" id="vaga" name="vaga"><br>

<label for="Country">Country:</label><br>
<input type="text" id="Country" name="Country"><br>

<label for="Garanty">Garanty:</label><br>
<input type="text" id="Garanty" name="Garanty"><br>


        <button type="submit">Create Velo</button>
    </form>
</body>
</html>
