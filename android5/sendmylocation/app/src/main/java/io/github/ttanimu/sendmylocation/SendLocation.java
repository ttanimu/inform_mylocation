package io.github.ttanimu.sendmylocation;

import android.annotation.SuppressLint;
import android.app.Activity;
import android.location.Location;
import android.os.AsyncTask;

import java.io.IOException;
import java.io.InputStream;
import java.net.HttpURLConnection;
import java.net.URL;

public class SendLocation extends AsyncTask<Location, Integer, Integer> {
    @SuppressLint("StaticFieldLeak")
    private Activity act;
    public SendLocation(Activity a) {
        super();
        act = a;
    }
    @Override
    protected Integer doInBackground(Location... arg0) {
        Location l=(Location)arg0[0];
        HttpURLConnection cl = null;
        try {
            URL url =
                    new URL("https://<server name>/mylocation/setlocation.php?x="
                            + l.getLongitude() + "&y=" + l.getLatitude());
            cl = (HttpURLConnection) url.openConnection();
            InputStream str = cl.getInputStream();
        } catch(IOException e){
            return null;
        } finally {
            assert cl != null;
            cl.disconnect();
        }
        return null;
    }
}
