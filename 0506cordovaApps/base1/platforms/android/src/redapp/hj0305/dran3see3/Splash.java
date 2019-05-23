package redapp.hj0305.dran3see3;

import android.app.Activity;
import android.content.Intent;
import android.graphics.Typeface;
import android.os.Bundle;
import android.os.Handler;
import android.os.Message;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;
import android.view.animation.Animation;
import android.view.animation.AnimationUtils;
import android.widget.Button;
import android.widget.TextView;

/**
 * Created by leejunghun on 2017-10-02.
 */

public class Splash extends Activity {
    final Activity s=this;
    @Override
    public void onCreate(Bundle b){
        super.onCreate(b);
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN,WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.splash);

        Button btn=(Button)this.findViewById(R.id.btn);
        btn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent=new Intent(s,MainActivity.class);
                startActivity(intent);
                finish();
            }
        });

        //h.sendEmptyMessageDelayed(0,2000);
    }

    Handler h=new Handler(){
        public void handleMessage(Message msg){
            Intent intent=new Intent(s,MainActivity.class);
            startActivity(intent);
            finish();
        }
    };
}
