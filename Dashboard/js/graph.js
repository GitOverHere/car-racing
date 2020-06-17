var g1 = document.getElementById("revenue-graph");
var g2 = document.getElementById("views-graph");
var g3 = document.getElementById("average-time-graph");
var g4 = document.getElementById("custom-graph");

var graph1 = g1.getContext("2d");
var graph2 = g2.getContext("2d");
var graph3 = g3.getContext("2d");
var graph4 = g4.getContext("2d");

graph1.font ="20px  Arial";
graph1.fillStyle = "#000000";
graph1.strokeText("No Data Available",5,30);
graph2.font ="20px Arial";
graph2.fillStyle = "#000000";
graph2.strokeText("No Data Available",5,30);
graph3.font ="20px Arial";
graph3.fillStyle = "#000000";
graph3.strokeText("No Data Available",5,30);
graph4.font ="20px Arial";
graph4.fillStyle = "#000000";
graph4.strokeText("No Data Available",5,30);


