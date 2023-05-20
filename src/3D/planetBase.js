
class Location {
	constructor(lat, lon, texture) {
		this.lat = lat
		this.lon = lon
		this.texture = texture
	}
}

function newPlanet(planetTexture, cloudTexture, locations) {
	var mesh;
	var mouseDown = false;
	
	var startX = 0;
	var startY = 0;
	
	var mouseX = 0;
	var mouseY = 0;
	var rotation = 0;
	
	var deltaMX = 0;
	var deltaMY = 0;
	var movedX = 0;
	var movedY = 0;

	// Credit: https://stackoverflow.com/questions/36369734/how-to-map-latitude-and-longitude-to-a-3d-sphere
	function latLongToVector(lat, lon) {
		const radius = 2.1;
		var phi   = (90-lat)*(Math.PI/180),
		theta = (lon+180)*(Math.PI/180),
		x = -((radius) * Math.sin(phi)*Math.cos(theta)),
		z = ((radius) * Math.sin(phi)*Math.sin(theta)),
		y = ((radius) * Math.cos(phi));

		return new THREE.Vector3(x,y,z);
	}
	
	function newLabel(location) {
		const map = new THREE.TextureLoader().load( location.texture );
		const material2 = new THREE.SpriteMaterial( { map: map } );
		const sprite = new THREE.Sprite( material2 );
		var newVector = latLongToVector(location.lat, location.lon);
		sprite.position.x = newVector.x;
		sprite.position.y = newVector.y;
		sprite.position.z = newVector.z;
		mesh.add( sprite );
	}
	
	function newGlow() {
		const map = new THREE.TextureLoader().load( "/3D/planetGlow.png");
		const material2 = new THREE.SpriteMaterial( { map: map } );
		const sprite = new THREE.Sprite( material2 );
		sprite.scale.set( 6, 6, 1 );
		sprite.position.x = 0;
		sprite.position.y = 0;
		sprite.position.z = 0;
		mesh.add( sprite );
	}
	
	const parent = document.querySelector('script[src="/3D/planetBase.js"]').parentNode;
	const scene = new THREE.Scene();
	const camera = new THREE.PerspectiveCamera( 75, parent.clientWidth / parent.clientHeight, 0.1, 1000 );
	
	onmousemove = function(e){mouseX = e.clientX; mouseY = e.clientY};

	const renderer = new THREE.WebGLRenderer( { alpha: true } );
	parent.appendChild( renderer.domElement );

	function resizeRenderer() {
		renderer.setSize( parent.clientWidth, parent.clientHeight );
	}	
	window.addEventListener('resize', resizeRenderer);
	resizeRenderer();

	var texture = new THREE.TextureLoader().load( planetTexture );;
	var geometry = new THREE.SphereGeometry( 2 );
	var material = new THREE.MeshBasicMaterial( { map: texture } );
	mesh = new THREE.Mesh( geometry, material );
	
	newGlow()
	for(var i = 0; i < locations.length; i++) {
		newLabel(locations[i])
	}
	
	
	scene.add( mesh );
	
	
	// clouds
	
	var texture2 = new THREE.TextureLoader().load( cloudTexture );;
	var geometry2 = new THREE.SphereGeometry( 2.01 );
	var material2 = new THREE.MeshBasicMaterial( { map: texture2 } );
	material2.transparent = true;
	mesh2 = new THREE.Mesh( geometry2, material2 );
	scene.add(mesh2)
	
	camera.position.z = 5;

	function animate() {
		requestAnimationFrame( animate );
		
		if(mouseDown) {
			deltaMX = mouseX - startX;
			deltaMY = mouseY - startY;
		}

		//mesh.rotation.x += 0.01;
		mesh.rotation.y = rotation + (deltaMX + movedX) / 200;
		rotation -= 0.005
		mesh.rotation.x = (deltaMY + movedY) / 200
		
		mesh2.rotation.x = (deltaMY + movedY) / 200 
		mesh2.rotation.y = rotation / 5 + (deltaMX + movedX) / 200;
		
		//controls.update();

		renderer.render( scene, camera );
	}

	animate();
	
	
	// Mouse detection source: https://stackoverflow.com/questions/322378/javascript-check-if-mouse-button-down
	
	parent.onmousedown = function() { 
		mouseDown = true;
		startX = mouseX;
		startY = mouseY	
	}
	document.body.onmouseup = function() {
		mouseDown = false;
		movedX += deltaMX;
		movedY += deltaMY;
		deltaMX = 0;
		deltaMY = 0;
	}
}