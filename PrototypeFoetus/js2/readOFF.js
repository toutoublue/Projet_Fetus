// Read a *TRIANGLE* mesh from an OFF file
//
// Inputs:
//   server_path  path to .obj file on server
//   mesh  mesh object
//   callback  function to call after async reading
// Returns mesh struct with:
//   .V  3d vertex posistions
//   .F  triangle indices into positions
//   .N  3d normal vectors
//   .FN  triangle indices into normals
//   .TC  2d texture coordinates
//   .FTC  triangle indices into texture coordinates
// Throws an error
/*
 function readOBJ_from_server(server_path,mesh,callback)
 {
 var request = new XMLHttpRequest();
 // Hack so that resource is always reloaded
 // http://ajaxpatterns.org/XMLHttpRequest_Call#How_will_caching_be_controlled.3F
 request.open("GET",server_path+"?timestamp=" + new Date().getTime());
 request.onreadystatechange = function () 
 {
 if (request.readyState == 4)
 {
 readOBJ_from_string(request.responseText,mesh);
 callback(mesh);
 }
 }
 request.send();
 }
 */

// Same as above but read from string synchronously

function readOFF_from_string(string, mesh)
{

    mesh.V = new Array();
    mesh.N = new Array();
    mesh.TC = new Array();
    mesh.F = new Array();
    mesh.FN = new Array();
    mesh.FTC = new Array();
    var lines = string.split("\n");
    var NumofVertices = new Array();
    var num = 0;
    
    for (var i = 0; i < lines.length; i++) {
        var data = lines[i].trim().split(" ");
        if (data.valueOf() == 'OFF') {
            NumofVertices[num++] = i;
        }
    }

    for (var j = 0; j < num; j++) {
        var size = lines[(1 + NumofVertices[j])].trim().split(" ");
        var sizeV = size[0], sizeT = size[1], tmp = size[2];

        for (var l = 2 + NumofVertices[j]; l < 2 + parseInt(sizeV)+ NumofVertices[j]; l++) {
            var data = lines[l].trim().split(" ");

            if (data.length != 3)
            {
                throw new Error("readOFF_from_string: bad format");
            } else {
                mesh.V.push.apply(mesh.V, data.map(Number));
            }
        }

        for (var l = 2 + parseInt(sizeV) + NumofVertices[j]; l < 2 + parseInt(sizeV) + parseInt(sizeT)+ NumofVertices[j]; l++) {
            var data = lines[l].trim().split(" ");
            var NumOfVertices = data.shift();

            if (parseInt(NumOfVertices) != 3)
            {
                throw new Error("readOFF_from_string: only triangles are supported");
            } else {
                mesh.F.push.apply(mesh.F, data.map(Number));
            }
        }
    }

}





