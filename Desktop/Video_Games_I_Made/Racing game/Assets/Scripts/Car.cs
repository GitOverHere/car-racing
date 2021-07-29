using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Car: MonoBehaviour {

  public WheelCollider frontLeftWheelCollider, frontRightWheelCollider, backLeftWheelCollider, backRightWheelCollider;
  public Transform frontleft, frontright, backleft, backright;
  public float maxSteeringAngle = 75.0f;
  public float motorTorque = 10000.0f;
  public float brakeTorque = 50f;
  public bool Reverse = false;
 

  // Use this for initialization
  void Start() {

  }
  
  
  private void Steer(){
	  
	   float h = Input.GetAxis("Horizontal");

	  frontLeftWheelCollider.steerAngle = maxSteeringAngle*h;
      frontRightWheelCollider.steerAngle = maxSteeringAngle*h;
      frontLeftWheelCollider.transform.Rotate(0,maxSteeringAngle*h, 0);
      frontRightWheelCollider.transform.Rotate(0,maxSteeringAngle*h,0);
	  
  }

  void Update() {

   
    float v = Input.GetAxis("Vertical");
	Steer();
    if(Input.GetKey("r")){
		if(!Reverse){
			Reverse= true;
		}
		else {
			Reverse = false;
		}
		
	}

    if (v > 0f) {

      if (frontLeftWheelCollider.motorTorque <= 0f) {
        frontLeftWheelCollider.motorTorque += motorTorque;
        frontRightWheelCollider.motorTorque += motorTorque;
      } else 
	  {
		  if(frontLeftWheelCollider.motorTorque < 100000f){
        frontLeftWheelCollider.motorTorque *= motorTorque;
        frontRightWheelCollider.motorTorque *= motorTorque;
		  }
      }

      frontLeftWheelCollider.brakeTorque = 0f;
	  frontRightWheelCollider.brakeTorque = 0f;
    }

    if (v < 0f) {
		if(!Reverse){
      if (frontLeftWheelCollider.brakeTorque > 0f) {
        frontLeftWheelCollider.brakeTorque += frontLeftWheelCollider.brakeTorque;
        frontRightWheelCollider.brakeTorque += frontRightWheelCollider.brakeTorque;
      } else {
        frontLeftWheelCollider.brakeTorque += brakeTorque;
        frontRightWheelCollider.brakeTorque += brakeTorque;
      }
		}

      frontLeftWheelCollider.motorTorque -= 2 * frontLeftWheelCollider.motorTorque;
      frontRightWheelCollider.motorTorque -= 2 * frontRightWheelCollider.motorTorque;
    }

    frontleft.transform.Rotate(0, 0, (frontLeftWheelCollider.rpm / 60) / Time.deltaTime, Space.Self);
    frontright.transform.Rotate(0, 0, (frontRightWheelCollider.rpm / 60) / Time.deltaTime, Space.Self);
    backleft.transform.Rotate(0, 0, (frontLeftWheelCollider.rpm / 60) / Time.deltaTime, Space.Self);
    backright.transform.Rotate(0, 0, (frontRightWheelCollider.rpm / 60) / Time.deltaTime, Space.Self);
  }
}