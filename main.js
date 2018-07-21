var animalData;
$.getJSON("../animals.json", function(jsonData){
    animalData = jsonData;
});

var generateDogTable = (data) => {
    for(let i = 0; i < data.length; i++){
        var tr = document.createElement('tr');
        let tdName = document.createElement('td');
        tdName.textContent = data[i].name;
        tr.appendChild(tdName);
        let tdBreed = document.createElement('td');
        tdBreed.textContent = data[i].breed;
        tr.appendChild(tdBreed);                
        let tdSex = document.createElement('td');
        tdSex.textContent = data[i].sex;
        tr.appendChild(tdSex);                
        let tdShots = document.createElement('td');
        tdShots.textContent = data[i].shots;
        tr.appendChild(tdShots);                
        let tdAge = document.createElement('td');
        tdAge.textContent = data[i].age;
        tr.appendChild(tdAge);                
        let tdSize = document.createElement('td');
        tdSize.textContent = data[i].size;
        tr.appendChild(tdSize);                
        let tdLicensed = document.createElement('td');
        tdLicensed.textContent = data[i].licensed;
        tr.appendChild(tdLicensed);
        let tdNeutered = document.createElement('td');
        tdNeutered.textContent = data[i].neutered;
        tr.appendChild(tdNeutered);                
        let tdOwners = document.createElement('td');
        tdOwners.innerHTML = '<a href="#" class="ownersModal" data-toggle="modal" data-target="#ownerModal">Click here</a>';
        // tdOwners.textContent = data[i].owners;
        tr.appendChild(tdOwners);                
        let tdNotes = document.createElement('td');
        // tdNotes.textContent = data[i].notes;
        tdNotes.innerHTML = '<a href="#" class="notesModal" data-toggle="modal" data-target="#notesModal">Click here</a>';
        tr.appendChild(tdNotes);
        document.getElementById("dogTable").appendChild(tr);                
    }
}
var generateCatTable = (data) => {
    for(let i = 0; i < data.length; i++){
        var tr = document.createElement('tr');
        let tdName = document.createElement('td');
        tdName.textContent = data[i].name;
        tr.appendChild(tdName);
        let tdBreed = document.createElement('td');
        tdBreed.textContent = data[i].breed;
        tr.appendChild(tdBreed);                
        let tdSex = document.createElement('td');
        tdSex.textContent = data[i].sex;
        tr.appendChild(tdSex);                
        let tdShots = document.createElement('td');
        tdShots.textContent = data[i].shots;
        tr.appendChild(tdShots);                
        let tdAge = document.createElement('td');
        tdAge.textContent = data[i].age;
        tr.appendChild(tdAge);                
        let tdSize = document.createElement('td');
        tdSize.textContent = data[i].declawed;
        tr.appendChild(tdSize);                
        let tdNeutered = document.createElement('td');
        tdNeutered.textContent = data[i].neutered;
        tr.appendChild(tdNeutered);                
        let tdOwners = document.createElement('td');
        // tdOwners.textContent = data[i].owners;
        tdOwners.innerHTML = '<a href="#" class="ownersModal" data-toggle="modal" data-target="#ownerModal">Click here</a>';
        tr.appendChild(tdOwners);                
        let tdNotes = document.createElement('td');
        // tdNotes.textContent = data[i].notes;
        tdNotes.innerHTML = '<a href="#" class="notesModal" data-toggle="modal" data-target="#notesModal">Click here</a>';
        tr.appendChild(tdNotes);                
        document.getElementById("catTable").appendChild(tr);                
    }
}
var generateExoticTable = (data) => {
    for(let i = 0; i < data.length; i++){
        var tr = document.createElement('tr');
        let tdName = document.createElement('td');
        tdName.textContent = data[i].name;
        tr.appendChild(tdName);
        let tdBreed = document.createElement('td');
        tdBreed.textContent = data[i].species;
        tr.appendChild(tdBreed);                
        let tdSex = document.createElement('td');
        tdSex.textContent = data[i].sex;
        tr.appendChild(tdSex);                
        let tdShots = document.createElement('td');
        tdShots.textContent = data[i].age;
        tr.appendChild(tdShots);                                
        let tdSize = document.createElement('td');
        // tdSize.textContent = data[i].owners;
        tdSize.innerHTML = '<a href="#" class="ownersModal" data-toggle="modal" data-target="#ownerModal">Click here</a>';
        tr.appendChild(tdSize);                
        let tdLicensed = document.createElement('td');
        // tdLicensed.textContent = data[i].notes;
        tdLicensed.innerHTML = '<a href="#" class="notesModal" data-toggle="modal" data-target="#notesModal">Click here</a>';
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