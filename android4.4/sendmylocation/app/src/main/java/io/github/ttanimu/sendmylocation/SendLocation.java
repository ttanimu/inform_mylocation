package io.github.ttanimu.sendmylocation;

import android.app.Activity;
import android.location.Location;
import android.os.AsyncTask;

import java.io.IOException;

import org.apache.http.HttpResponse;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.impl.client.DefaultHttpClient;

public class SendLocation extends AsyncTask<Location , Integer , Integer> {
    private Activity act;
    public SendLocation(Activity a) {
        act = a;
    }
    @Override
    protected Integer doInBackground(Location... arg0) {
        Location l=(Location)arg0[0];
        String url=
                "https://<server name>/mylocation/setlocation.php?x="
                        +l.getLongitude()+"&y="+l.getLatitude();
        DefaultHttpClient cl = new DefaultHttpClient();
        HttpGet req = new HttpGet(url);
        HttpResponse res = null;
        try {
            res = cl.execute(req);
        } catch (IOException e) {
            e.printStackTrace();
        } finally {
            cl.getConnectionManager().shutdown();
        }
        return null;
    }
}
