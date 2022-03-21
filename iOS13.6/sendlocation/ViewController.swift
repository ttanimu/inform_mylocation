//
//  ViewController.swift
//  sendlocation
//

import UIKit
import CoreLocation

class ViewController: UIViewController,CLLocationManagerDelegate {

    @IBOutlet weak var lblLocation: UILabel!
    var lat: String = ""
    var lng: String = ""
    var locationManager: CLLocationManager!
    
    override func viewDidLoad() {
        super.viewDidLoad()
        locationManager = CLLocationManager()
        locationManager.requestWhenInUseAuthorization()
        let status = CLLocationManager.authorizationStatus()
        if status == .authorizedWhenInUse {
            locationManager.delegate = self
            locationManager.desiredAccuracy = kCLLocationAccuracyBest
            locationManager.distanceFilter = 10
            locationManager.startUpdatingLocation()
        }
    }

    @IBAction func btnSendLocation(_ sender: Any) {
        let url = URL(string: "https://<server name>/mylocation/setlocation.php?x=\(lng)&y=\(lat)")
        let request = URLRequest(url: url!)
        let session = URLSession.shared
        session.dataTask(with: request).resume()
     }

    func locationManager(_ manager: CLLocationManager,
                didUpdateLocations locations: [CLLocation]) {
        let location = locations.first
        let latitude = location?.coordinate.latitude
        let longitude = location?.coordinate.longitude
        self.lat = String(latitude!)
        self.lng = String(longitude!)
        self.lblLocation.text = "x=\(lng)&y=\(lat)"
        let url = URL(string: "https://<server name>/mylocation/setlocation.php?x=\(lng)&y=\(lat)")
        let request = URLRequest(url: url!)
        let session = URLSession.shared
        session.dataTask(with: request).resume()
    }
}

