package com.knocdoorservices.kdshrms;

import android.Manifest;
import android.support.v4.app.ActivityCompat;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.webkit.GeolocationPermissions;
import android.webkit.WebChromeClient;
import android.webkit.WebView;
import android.webkit.WebViewClient;

public class MainActivity extends AppCompatActivity {
    /**
     * WebViewClient subclass loads all hyperlinks in the existing WebView
     */
    public class GeoWebViewClient extends WebViewClient {
        @Override
        public boolean shouldOverrideUrlLoading(WebView view, String url) {
            // When user clicks a hyperlink, load in the existing WebView
            view.loadUrl(url);
            return true;
        }
    }
    /**
     * WebChromeClient subclass handles UI-related calls
     * Note: think chrome as in decoration, not the Chrome browser
     */
    public class GeoWebChromeClient extends WebChromeClient {
        @Override
        public void onGeolocationPermissionsShowPrompt(String origin,
                                                       GeolocationPermissions.Callback callback) {
            // Always grant permission since the app itself requires location
            // permission and the user has therefore already granted it
            callback.invoke(origin, true, false);
        }
    }
    WebView mwv;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        mwv = (WebView) findViewById(R.id.webView);
        mwv.getSettings().setJavaScriptCanOpenWindowsAutomatically(true);
        mwv.getSettings().setBuiltInZoomControls(true);
        mwv.setWebViewClient(new GeoWebViewClient());
        mwv.getSettings().setJavaScriptEnabled(true);
        mwv.getSettings().setGeolocationEnabled(true);
        mwv.setWebChromeClient(new GeoWebChromeClient());
        mwv.loadUrl("https://kdshrms.knocdoorservices.com/");
        ActivityCompat.requestPermissions(this, new String[]{
                Manifest.permission.ACCESS_FINE_LOCATION,
                Manifest.permission.ACCESS_COARSE_LOCATION
        }, 0);
    }
    @Override
    public void onBackPressed() {
        // Pop the browser back stack or exit the activity
        if (mwv.canGoBack()) {
            mwv.goBack();
        }
        else {
            super.onBackPressed();
        }
    }
}
