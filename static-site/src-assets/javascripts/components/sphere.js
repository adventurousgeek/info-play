var sphereRenderer;
var sphereScene;
var sphereCamera;
var sphereControls;
var sphere;
var sphereResizeFactor;
var sphereWidth;
var sphereHeight;



function initSphere() {

    scaleSphere();

    sphereRenderer = new THREE.WebGLRenderer({
        antialias: true,
        alpha: true,
        canvas: document.getElementById("sphere"),
    });


    sphereRenderer.setPixelRatio(window.devicePixelRatio);
    sphereRenderer.setSize(sphereWidth, sphereHeight);

    //document.body.appendChild(sphereRenderer.domElement);
    //document.getElementsByClassName('landing-section')[0].appendChild(sphereRenderer.domElement);


    sphereScene = new THREE.Scene();

    sphereCamera = new THREE.PerspectiveCamera(48, sphereWidth / sphereHeight, 0.1, 1000);

    sphereScene.add(sphereCamera);

    sphereCamera.position.set(0, 37, -50);

    sphereCamera.lookAt(sphereScene.position);

    //sphereControls = new THREE.OrbitControls(sphereCamera);
}

function onSphereWindowResize() {
    scaleSphere();
    sphereCamera.aspect = sphereWidth / sphereHeight;
    sphereCamera.updateProjectionMatrix();
    sphereRenderer.setSize(sphereWidth, sphereHeight);
}

function createSphere() {
    var sphereGeo = new THREE.SphereGeometry(25, 32, 32);
    THREE.ImageUtils.crossOrigin = '';
    var sphereTexture = THREE.ImageUtils.loadTexture('assets/images/sphere-image.jpg');
    sphereTexture.minFilter = THREE.LinearFilter;
    var sphereMat = new THREE.MeshBasicMaterial({map: sphereTexture});
    sphere = new THREE.Mesh(sphereGeo, sphereMat);
    sphereScene.add(sphere);
}

function animateSphere() {
    requestAnimationFrame(animateSphere);
    sphere.rotation.y += 0.002;
    //sphereControls.update();
    //sphereRenderer.setViewport(0, 0, sphereWidth, sphereHeight);
    renderSphere();
}

function renderSphere() {
    sphereRenderer.render(sphereScene, sphereCamera);
}

function scaleSphere(){

    sphereResizeFactor = 0.7;

    if (window.innerWidth <= 1200 ) {
        sphereResizeFactor = 1;
    }

    sphereWidth = window.innerWidth;
    sphereHeight = window.innerHeight / sphereResizeFactor;

}


initSphere();

createSphere();

animateSphere();

window.addEventListener("resize", onSphereWindowResize);