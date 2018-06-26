{"filter":false,"title":"2018_06_21_095820_create_user_follow_table.php","tooltip":"/microposts/database/migrations/2018_06_21_095820_create_user_follow_table.php","undoManager":{"mark":7,"position":7,"stack":[[{"start":{"row":17,"column":12},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":18,"column":0},"end":{"row":18,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":17,"column":12},"end":{"row":18,"column":62},"action":"insert","lines":[" $table->integer('user_id')->unsigned()->index();","            $table->integer('follow_id')->unsigned()->index();"],"id":3}],[{"start":{"row":17,"column":12},"end":{"row":17,"column":13},"action":"remove","lines":[" "],"id":4}],[{"start":{"row":20,"column":8},"end":{"row":22,"column":8},"action":"insert","lines":["","            ","        "],"id":5}],[{"start":{"row":20,"column":8},"end":{"row":25,"column":53},"action":"insert","lines":["     // Foreign key setting","            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');","            $table->foreign('follow_id')->references('id')->on('users')->onDelete('cascade');","","            // Do not allow duplication of combination of user_id and follow_id","            $table->unique(['user_id', 'follow_id']);"],"id":6}],[{"start":{"row":20,"column":13},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":7},{"start":{"row":21,"column":0},"end":{"row":21,"column":13},"action":"insert","lines":["             "]}],[{"start":{"row":20,"column":12},"end":{"row":20,"column":13},"action":"remove","lines":[" "],"id":8}],[{"start":{"row":27,"column":8},"end":{"row":27,"column":12},"action":"remove","lines":["    "],"id":9},{"start":{"row":27,"column":4},"end":{"row":27,"column":8},"action":"remove","lines":["    "]},{"start":{"row":27,"column":0},"end":{"row":27,"column":4},"action":"remove","lines":["    "]},{"start":{"row":26,"column":53},"end":{"row":27,"column":0},"action":"remove","lines":["",""]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":26,"column":53},"end":{"row":26,"column":53},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1529543253721,"hash":"a7c35bc0f66d93f94daef2a5d62684d32656fb5d"}