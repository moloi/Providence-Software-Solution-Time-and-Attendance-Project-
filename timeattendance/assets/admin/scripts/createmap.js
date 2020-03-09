var selectedShape = null;
var coordinates = PointsArray = [];
var _newShapeNextId = 0;
var uf_lat_lng_points = "";

function initialize()
{
    var markers = [];
    var mapOptions = {
        center: new google.maps.LatLng(0, -180),
        mapTypeId: google.maps.MapTypeId.HYBRID,
        zoom: 3
    };
    var map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);



    // Create the search box and link it to the UI element.
    var input = /** @type {HTMLInputElement} */(
        document.getElementById('pac-input'));
    map.controls[google.maps.ControlPosition.TOP_CENTER].push(input);

    var searchBox = new google.maps.places.SearchBox(
        /** @type {HTMLInputElement} */(input));

    // [START region_getplaces]
    // Listen for the event fired when the user selects an item from the
    // pick list. Retrieve the matching places for that item.
    google.maps.event.addListener(searchBox, 'places_changed', function() {
        var places = searchBox.getPlaces();

        if (places.length == 0) {
            return;
        }
        for (var i = 0, marker; marker = markers[i]; i++) {
            marker.setMap(null);
        }

        // For each place, get the icon, place name, and location.
        markers = [];
        var bounds = new google.maps.LatLngBounds();
        for (var i = 0, place; place = places[i]; i++) {
            var image = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            var marker = new google.maps.Marker({
                map: map,
                icon: image,
                title: place.name,
                position: place.geometry.location
            });

            markers.push(marker);

            bounds.extend(place.geometry.location);
        }

        map.fitBounds(bounds);
    });
    // [END region_getplaces]

    // Bias the SearchBox results towards places that are within the bounds of the
    // current map's viewport.
    google.maps.event.addListener(map, 'bounds_changed', function() {
        var bounds = map.getBounds();
        searchBox.setBounds(bounds);
    });

    var flightPlanCoordinates = [
        new google.maps.LatLng(37.772323, -122.214897),
        new google.maps.LatLng(21.291982, -157.821856),
        new google.maps.LatLng(-18.142599, 178.431),
        new google.maps.LatLng(-27.46758, 153.027892)
    ];
    var flightPath = new google.maps.Polygon({
        path: flightPlanCoordinates,
        editable: false,
        strokeColor: '#FF0000',
        strokeOpacity: 1.0,
        strokeWeight: 2,
        map: map
    });

    if(flightPath)
    {
        uf_lat_lng_points ="(";
        flightPath.getPath().forEach(function (latLng) {
            latlngstr =parseLatLngString(latLng.toString()) ;
            uf_lat_lng_points += latlngstr + ",";
        });
        uf_lat_lng_points +="),";
        flightPath.appId = _newShapeNextId;
        var shapeId = flightPath.appId;
        PointsArray[shapeId] = uf_lat_lng_points;
        _newShapeNextId++;
        console.log(PointsArray);
    }

    var polygonOptions = {
        strokeColor: "#FF0101",
        strokeOpacity: 0.8,
        strokeWeight: 3,
        fillOpacity: 0.0,
        editable : true,
        clickable: true,
        fillColor : "#FF1493"
    };

    var deleteMenu = new DeleteMenu();
    google.maps.event.addListener(flightPath, 'rightclick', function(e) {
        // Check if click was on a vertex control point
        if (e.vertex == undefined) {
            return;
        }
        deleteMenu.open(map, flightPath.getPath(), e.vertex);
    });

    var drawingManager = new google.maps.drawing.DrawingManager({
        drawingMode: google.maps.drawing.OverlayType.MARKER,
        drawingControl: true,
        drawingControlOptions: {
            position: google.maps.ControlPosition.TOP_LEFT,
            drawingModes: [
                google.maps.drawing.OverlayType.POLYGON,
                google.maps.drawing.OverlayType.POLYLINE
            ]
        },
        polygonOptions:polygonOptions,
        polylineOptions:polygonOptions,
        map : map
    });
    drawingManager.setDrawingMode(null);

    google.maps.event.addListener(drawingManager, 'overlaycomplete', function(e) {
        if (e.type != google.maps.drawing.OverlayType.MARKER) {
            drawingManager.setDrawingMode(null);
            var newShape = e.overlay;
            newShape.type = e.type;

            uf_lat_lng_points ="(";
            newShape.getPath().forEach(function (latLng) {
                latlngstr =parseLatLngString(latLng.toString()) ;
                uf_lat_lng_points += latlngstr + ",";
            });
            uf_lat_lng_points +="),";
            newShape.appId = _newShapeNextId;
            var shapeId = newShape.appId;
            PointsArray[shapeId] = uf_lat_lng_points;
            _newShapeNextId++;
            console.log(PointsArray);

            google.maps.event.addListener( newShape, 'click', function() {setSelection(newShape);} );
            setSelection(newShape);
            google.maps.event.addListener(newShape, 'rightclick', function(e) {
                if (e.vertex == undefined) {
                    return;
                }
                deleteMenu.open(map, newShape.getPath(), e.vertex);
            });
        }
    });


    google.maps.event.addListener(flightPath, 'click', function() {setSelection(flightPath); });
    google.maps.event.addDomListener(document.getElementById('delete-all'), 'click', deleteAll);
    google.maps.event.addDomListener(document.getElementById('delete'), 'click', deleteSelectedShape);
    google.maps.event.addListener(drawingManager, 'drawingmode_changed', clearSelection);
    google.maps.event.addListener(map, 'click', clearSelection);
}

function parseLatLngString(latLng)
{
    latlngstr = latLng.toString();
    latlngstr = latlngstr.replace(")", "");
    latlngstr = latlngstr.replace("(", "");
    latlngstr = latlngstr.replace(",", "|");
    return latlngstr;
}

function deleteSelectedShape() {
    if (selectionIsSet()) {
        shapesDelete(selectedShape);
        selectionDelete();
    }
    else{
        alert("Select shape");
    }
}

function selectionDelete() {
    if (selectedShape != null) {
        selectedShape.setMap(null);
        clearSelection();
    }
}

function selectionIsSet() {
    return selectedShape != null;
}

function shapesDelete(shape) {
    PointsArray.splice(shape.appId , 1);
}

function clearSelection() {
    if (selectedShape) {
        selectedShape.setEditable(false);
        selectedShape = null;
    }
}

function setSelection(shape) {
    clearSelection();
    selectionSet(shape);
    shape.setEditable(true);
}

function  selectionSet(newSelection)
{
    if (newSelection == selectedShape) {
        return;
    }

    if (selectedShape != null) {
        selectedShape.setEditable(false);
        selectedShape = null;
    }

    if (newSelection != null) {
        selectedShape = newSelection;
        selectedShape.setEditable(false);
    }
}


/**
 * A menu that lets a user delete a selected vertex of a path.
 * @constructor
 */
function DeleteMenu() {
    this.div_ = document.createElement('div');
    this.div_.className = 'delete-menu';
    this.div_.innerHTML = 'Delete';

    var menu = this;
    google.maps.event.addDomListener(this.div_, 'click', function() {
        menu.removeVertex();
    });
}
DeleteMenu.prototype = new google.maps.OverlayView();

DeleteMenu.prototype.onAdd = function() {
    var deleteMenu = this;
    var map = this.getMap();
    this.getPanes().floatPane.appendChild(this.div_);

    // mousedown anywhere on the map except on the menu div will close the
    // menu.
    this.divListener_ = google.maps.event.addDomListener(map.getDiv(), 'mousedown', function(e) {
        if (e.target != deleteMenu.div_) {
            deleteMenu.close();
        }
    }, true);
};

DeleteMenu.prototype.onRemove = function() {
    google.maps.event.removeListener(this.divListener_);
    this.div_.parentNode.removeChild(this.div_);

    // clean up
    this.set('position');
    this.set('path');
    this.set('vertex');
};

DeleteMenu.prototype.close = function() {
    this.setMap(null);
};

DeleteMenu.prototype.draw = function() {
    var position = this.get('position');
    var projection = this.getProjection();

    if (!position || !projection) {
        return;
    }

    var point = projection.fromLatLngToDivPixel(position);
    this.div_.style.top = point.y + 'px';
    this.div_.style.left = point.x + 'px';
};

/**
 * Opens the menu at a vertex of a given path.
 */
DeleteMenu.prototype.open = function(map, path, vertex) {
    this.set('position', path.getAt(vertex));
    this.set('path', path);
    this.set('vertex', vertex);
    this.setMap(map);
    this.draw();
};

/**
 * Deletes the vertex from the path.
 */
DeleteMenu.prototype.removeVertex = function() {
    var path = this.get('path');
    var vertex = this.get('vertex');

    if (!path || vertex == undefined) {
        this.close();
        return;
    }

    path.removeAt(vertex);
    this.close();
};

google.maps.event.addDomListener(window, 'load', initialize);