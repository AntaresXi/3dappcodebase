// Variable to track if the model is spinning or not
var spinning = false;
// Variable to track the current mode of the model view
var currentmode = 0;

// Functions to set camera views
function cameraFront() {
    document.getElementById('model__View_cam_04').setAttribute('bind', 'true');
}
function cameraTop() {
    document.getElementById('model__View_cam_02').setAttribute('bind', 'true');
}
function cameraBottom() {
    document.getElementById('model__View_cam_03').setAttribute('bind', 'true');
}
function cameraBack() {
    document.getElementById('model__View_cam_01').setAttribute('bind', 'true');
}

// Function to toggle model spinning
function spin() {
    spinning = !spinning;
    document.getElementById('model__Timer').setAttribute('enabled', spinning.toString());
}

// Function to stop model rotation
function stopRotation() {
    spinning = false;
    document.getElementById('model__Timer').setAttribute('enabled', spinning.toString());
}

// Function to toggle animation of the model
function animateModel() {
    // Toggles the enabled attribute of the model timer
    if(document.getElementById('model__Timer').getAttribute('enabled') != 'true')
        document.getElementById('model__Timer').setAttribute('enabled', 'true');
    else
        document.getElementById('model__Timer').setAttribute('enabled', 'false');
}

// Function to set the render view mode of the model
function setRenderView(mode) {
    // Loops until the desired mode is set
    while(document.getElementById('x3d_viewer').runtime.togglePoints(true) != mode) {}
}
