var animalData;
$.getJSON("../animals.json", function(jsonData){
     animalData = jsonData;
});
//$.getJSON('/jsonData.php',function(jsonData){
    // animalData = JSON.parse(jsonData);
    //console.log(jsonData);
//});
// $.ajax({
//     url:'/jsonData.php',
//     data: {type: 'dog'},
//     type: 'get',
//     success: function(output){
//         var data = JSON.parse(output);
//         generateDogTable(data);
//     }
// })
var generateOwnersData = () => {
    var type = event.path[0].attributes["data-animal"].nodeValue;
    var id = event.path[0].attributes["id"].nodeValue;
    $.ajax({
        url:'/ownersData.php',
        data: 
            {
                id: id,
                type: type
            },
        method: 'GET',
        success: function(output){
            var data = JSON.parse(output);
            $("#ownerName").text(data[0][1] + " " + data[0][2]);
            $("#ownerAddress").html(data[0][4] + " " + data[0][5] + "<br>" + data[0][6] + ", " + data[0][7] + " " + data[0][8]);
            //console.log(data);
        },
        error: function(response){
		    console.log(response);
	    }
    });
}
var generateNotesData = () => {
    var type = event.path[0].attributes["data-animal"].nodeValue;
    var id = event.path[0].attributes["id"].nodeValue;
    $.ajax({
        url:'/ownersData.php',
        data: 
            {
                id: id,
                type: type
            },
        method: 'GET',
        success: function(output){
            var data = JSON.parse(output);
            // $("#ownerName").text(data[0][1] + " " + data[0][2]);
            // $("#ownerAddress").html(data[0][4] + " " + data[0][5] + "<br>" + data[0][6] + ", " + data[0][7] + " " + data[0][8]);
            console.log(data);
        },
        error: function(response){
		    console.log(response);
	    }
    });
}

var generateDogTable = (data) => {
	console.log("Here");
    for(let i = 0; i < data.length; i++){
        var tr = document.createElement('tr');
        let tdName = document.createElement('td');
//        tdName.textContent = data[i].name;
        tdName.textContent = data[i][1];
        tr.appendChild(tdName);
        let tdBreed = document.createElement('td');
//        tdBreed.textContent = data[i].breed;
        tdBreed.textContent = data[i][2];
        tr.appendChild(tdBreed);                
        let tdSex = document.createElement('td');
//        tdSex.textContent = data[i].sex;
        tdSex.textContent = data[i][3];
        tr.appendChild(tdSex);                
        let tdShots = document.createElement('td');
 //       tdShots.textContent = data[i].shots;
        // tdShots.textContent = data[i][4];
        tdShots.innerHTML = (data[i][4]==1) ?'<i class="fas fa-check" style="color: green"></i>': '<i class="fas fa-times" style="color: red"></i>';

        tr.appendChild(tdShots);                
        let tdAge = document.createElement('td');
//        tdAge.textContent = data[i].age;
        // tdAge.textContent = data[i][5];
        tdAge.innerHTML = (data[i][5]==1) ?'<i class="fas fa-check" style="color: green"></i>': '<i class="fas fa-times" style="color: red"></i>';

        tr.appendChild(tdAge);                
        let tdSize = document.createElement('td');
//        tdSize.textContent = data[i].size;
        // tdSize.textContent = data[i][6];
        tdSize.innerHTML = (data[i][6]==1) ?'<i class="fas fa-check" style="color: green"></i>': '<i class="fas fa-times" style="color: red"></i>';

        tr.appendChild(tdSize);                
        let tdLicensed1 = document.createElement('td');
//        tdLicensed.textContent = data[i].licensed;
        let birthday = new Date(data[i][7]);
        let diff = Date.now() - birthday.getTime();
        let ageDate = new Date(diff);
        let ageYears = Math.abs(ageDate.getUTCFullYear() - 1970);
        tdLicensed1.textContent = ageYears;
        tr.appendChild(tdLicensed1);
        let tdNeutered = document.createElement('td');
//        tdNeutered.textContent = data[i].neutered;
        tdNeutered.textContent = data[i][8];
        tr.appendChild(tdNeutered);                
        let tdOwners = document.createElement('td');
        tdOwners.innerHTML = '<a href="#" class="ownersModal" id="'+data[i][0]+'" data-toggle="modal" data-animal="dogs" data-target="#ownerModal" onclick="generateOwnersData(event)">Click here</a>';
        // tdOwners.textContent = data[i].owners;
        tr.appendChild(tdOwners);                
        let tdNotes = document.createElement('td');
        // tdNotes.textContent = data[i].notes;
        tdNotes.innerHTML = '<a href="#" class="notesModal" id="'+data[i][0]+'" data-toggle="modal" data-animal="dog" data-target="#notesModal" onclick="generateNotesData(event)">Click here</a>';
        tr.appendChild(tdNotes);
        document.getElementById("dogTable").appendChild(tr);                
    }
}
var generateCatTable = (data) => {
    for(let i = 0; i < data.length; i++){
        var tr = document.createElement('tr');
        let tdName = document.createElement('td');
        // tdName.textContent = data[i].name;
        tdName.textContent = data[i][1];
        tr.appendChild(tdName);
        let tdBreed = document.createElement('td');
        // tdBreed.textContent = data[i].breed;
        tdBreed.textContent = data[i][2];
        tr.appendChild(tdBreed);                
        let tdSex = document.createElement('td');
        // tdSex.textContent = data[i].sex;
        tdSex.textContent = data[i][3];
        tr.appendChild(tdSex);                
        let tdShots = document.createElement('td');
        tdShots.innerHTML = (data[i][4]==1) ?'<i class="fas fa-check" style="color: green"></i>': '<i class="fas fa-times" style="color: red"></i>';

        // tdShots.textContent = data[i].shots;
        // tdShots.textContent = data[i][4];
        tr.appendChild(tdShots);                
        let tdAge = document.createElement('td');
        // tdAge.textContent = data[i].age;
        // tdAge.textContent = data[i][5];
        tdAge.innerHTML = (data[i][5]==1) ?'<i class="fas fa-check" style="color: green"></i>': '<i class="fas fa-times" style="color: red"></i>';

        tr.appendChild(tdAge);                
        let tdSize = document.createElement('td');
        // tdSize.textContent = data[i].declawed;
        // tdSize.textContent = data[i][6];
        tdSize.innerHTML = (data[i][6]==1) ?'<i class="fas fa-check" style="color: green"></i>': '<i class="fas fa-times" style="color: red"></i>';
        tr.appendChild(tdSize);                
        let tdNeutered = document.createElement('td');
        // tdNeutered.textContent = data[i].neutered;
        let birthday = new Date(data[i][7]);
        let diff = Date.now() - birthday.getTime();
        let ageDate = new Date(diff);
        let ageYears = Math.abs(ageDate.getUTCFullYear() - 1970);
        tdNeutered.textContent = ageYears;
        tr.appendChild(tdNeutered);                
        let tdOwners = document.createElement('td');
        // tdOwners.textContent = data[i].owners;
        tdOwners.innerHTML = '<a href="#" class="ownersModal" id="'+data[i][0]+'" data-toggle="modal" data-animal="cats" data-target="#ownerModal" onclick="generateOwnersData(event)">Click here</a>';
        tr.appendChild(tdOwners);                
        let tdNotes = document.createElement('td');
        // tdNotes.textContent = data[i].notes;
        tdNotes.innerHTML = '<a href="#" class="notesModal" id="'+data[i][0]+'" data-toggle="modal" data-animal="cat" data-target="#notesModal" onclick="generateNotesData(event)">Click here</a>';
        tr.appendChild(tdNotes);                
        document.getElementById("catTable").appendChild(tr);                
    }
}
var generateExoticTable = (data) => {
    for(let i = 0; i < data.length; i++){
        var tr = document.createElement('tr');
        let tdName = document.createElement('td');
        // tdName.textContent = data[i].name;
        tdName.textContent = data[i][1];
        tr.appendChild(tdName);
        let tdBreed = document.createElement('td');
        // tdBreed.textContent = data[i].species;
        tdBreed.textContent = data[i][2];
        tr.appendChild(tdBreed);                
        let tdSex = document.createElement('td');
        // tdSex.textContent = data[i].sex;
        tdSex.textContent = data[i][3];
        tr.appendChild(tdSex);                
        let tdShots1 = document.createElement('td');
        // tdShots.textContent = data[i].age;
        // tdShots.textContent = data[i][4];
        tdShots1.innerHTML = (data[i][4]==1) ?'<i class="fas fa-check" style="color: green"></i>': '<i class="fas fa-times" style="color: red"></i>';

        tr.appendChild(tdShots1);                  
        let tdAge = document.createElement('td');
        let birthday = new Date(data[i][5]);
        let diff = Date.now() - birthday.getTime();
        let ageDate = new Date(diff);
        let ageYears = Math.abs(ageDate.getUTCFullYear() - 1970);
        tdAge.textContent = ageYears;
        tr.appendChild(tdAge);
        
        let tdSize = document.createElement('td');
        // tdSize.textContent = data[i].owners;
        tdSize.innerHTML = '<a href="#" class="ownersModal" id="'+data[i][0]+'" data-toggle="modal" data-animal="exotics" data-target="#ownerModal" onclick="generateOwnersData(event)">Click here</a>';
        tr.appendChild(tdSize);                
        let tdLicensed = document.createElement('td');
        // tdLicensed.textContent = data[i].notes;
        tdLicensed.innerHTML = '<a href="#" class="notesModal" id="'+data[i][0]+'" data-toggle="modal" data-animal="exotic" data-target="#notesModal" onclick="generateNotesData(event)">Click here</a>';
        tr.appendChild(tdLicensed);                
        document.getElementById("exoticTable").appendChild(tr);                
    }
}
//var data = {
//     "dogs": [
//         {
//             "name": "Tracker",
//             "breed": "Springer",
//             "sex": "Male",
//             "shots": "Yes",
//             "age": "12",
//             "size": "40g.",
//             "licensed": "Yes",
//             "neutered": "No",
//             "owners": "Backs",
//             "notes": "Notes"
//         },
//         {
//             "name": "Bucky",
//             "breed": "Poodle",
//             "sex": "Female",
//             "shots": "Not all",
//             "age": "4",
//             "size": "12g.",
//             "licensed": "No",
//             "neutered": "Yes",
//             "owners": "Johnsons",
//             "notes": "Notes"
//         },
//         {
//             "name": "Bailey",
//             "breed": "Beagle/Hound",
//             "sex": "Female",
//             "shots": "Yes",
//             "age": "6",
//             "size": "24g.",
//             "licensed": "Yes",
//             "neutered": "No",
//             "owners": "Backs",
//             "notes": "Notes"
//         }
//     ],
//     "cats": [
//         {
//             "name": "Whiskers",
//             "breed": "Siamese",
//             "sex": "Female",
//             "shots": "Not all",
//             "age": "8",
//             "declawed": "Yes",
//             "neutered": "No",
//             "owners": "Smiths",
//             "notes": "Notes"
//         },
//         {
//             "name": "Fluffy",
//             "breed": "Sphynx",
//             "sex": "Male",
//             "shots": "Yes",
//             "age": "4",
//             "declawed": "No",
//             "neutered": "Yes",
//             "owners": "Squires",
//             "notes": "Notes"
//         },
//         {
//             "name": "Scitz",
//             "breed": "House",
//             "sex": "Female",
//             "shots": "Yes",
//             "age": "12",
//             "declawed": "Yes",
//             "neutered": "Yes",
//             "owners": "Backs",
//             "notes": "Notes"
//         }
//     ],
//     "exotics": [
//     {
//             "name": "Lizzy",
//             "species": "Lizard",
//             "sex": "Female",
//             "age": "3",
//             "owners": "Durfeys",
//             "notes": "Notes"
//         },
//         {
//             "name": "Young Boss",
//             "species": "Squirrel",
//             "sex": "Male",
//             "age": "8",
//             "owners": "Shelleys",
//             "notes": "Notes"
//         },
//         {
//             "name": "Ball",
//             "species": "Hamster",
//             "sex": "Male",
//             "age": "1",
//             "owners": "Gales",
//             "notes": "Notes"
//         }
//     ]
// }
