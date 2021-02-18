<?php

use Illuminate\Database\Seeder;

class BookTableSeeder04 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //2014~2017
    public function run()
    {
        DB::table('books')->insert([
            [
                'id'=>'103',
                'title'=>'村上海賊の娘',
                'rank'=>'1',
                'year_id'=>'11',
                'book_img'=>'2014_01_book.jpg',
                'arasuzi'=>'『のぼうの城』から六年。四年間をこの一作だけに注ぎ込んだ、ケタ違いの著者最高傑作！　和睦が崩れ、信長に攻められる大坂本願寺。毛利は海路からの支援を乞われるが、成否は「海賊王」と呼ばれた村上武吉の帰趨にかかっていた。折しも、娘の景は上乗りで難波へむかう。家の存続を占って寝返りも辞さない緊張の続くなか、度肝を抜く戦いの幕が切って落とされる！ 第一次木津川合戦の史実に基づく一大巨篇。',
                'author'=>'和田 竜'
            ],
            [
                'id'=>'104',
                'title'=>'昨夜のカレー、明日のパン',
                'rank'=>'2',
                'year_id'=>'11',
                'book_img'=>'2014_02_book.jpg',
                'arasuzi'=>'夫を亡くした嫁と義父は共に暮らし、その死を受け入れていく。本屋大賞第2位、ドラマ化の感動作。',
                'author'=>'木皿 泉'
            ],
            [
                'id'=>'105',
                'title'=>'島はぼくらと',
                'rank'=>'3',
                'year_id'=>'11',
                'book_img'=>'2014_03_book.jpg',
                'arasuzi'=>'17歳。卒業までは一緒にいよう。
                この島の別れの言葉は「行ってきます」。
                きっと「おかえり」が待っているから。
                瀬戸内海に浮かぶ島、冴島。朱里、衣花、源樹、新の四人は島の唯一の同級生。フェリーで本土の高校に通う彼らは卒業と同時に島を出る。ある日、四人は冴島に「幻の脚本」を探しにきたという見知らぬ青年に声をかけられる。淡い恋と友情、大人たちの覚悟。旅立ちの日はもうすぐ。別れるときは笑顔でいよう。',
                'author'=>'辻村 深月'
            ],
            [
                'id'=>'106',
                'title'=>'さようなら、オレンジ',
                'rank'=>'4',
                'year_id'=>'11',
                'book_img'=>'2014_04_book.jpg',
                'arasuzi'=>'オーストラリアに流れ着いたアフリカ難民サリマ。言葉も不自由な彼女が、新しい生活を切り拓いてゆく。',
                'author'=>'岩城 けい'
            ],
            [
                'id'=>'107',
                'title'=>'とっぴんぱらりの風太郎',
                'rank'=>'5',
                'year_id'=>'11',
                'book_img'=>'2014_05_book.jpg',
                'arasuzi'=>'時は戦国、豊臣から徳川の時代への大転換期。
                重なり合った不運の末に、あえなく伊賀の国を「クビ」になった忍びの者、風太郎。
                しかたなく出た京でぼんくらな日々を送るなか、彼が出会ったのは一個の「ひょうたん」。
                老獪に語りはじめる謎の「ひょうたん」に誘われるようにして、風太郎の人生は時代に翻弄されながらも転がり始める。',
                'author'=>'万城目 学'
            ],
            [
                'id'=>'108',
                'title'=>'教場',
                'rank'=>'6',
                'year_id'=>'11',
                'book_img'=>'2014_06_book.jpg',
                'arasuzi'=>'この教官に睨まれたら、終わりだ。全部見抜かれる。誰も逃げられない。
                警察学校初任科第九十八期短期過程の生徒たちは、「落ち度があれば退校」という極限状態の中、異色の教官・風間公親に導かれ、覚醒してゆく。
                必要な人材を育てる前に、不要な人材をはじきだすための篩、それが警察学校だ。
                週刊文春「2013年ミステリーベスト10」国内部門第1位、
                宝島社「このミステリーがすごい！ 2014年版」国内編第2位、
                2014年本屋大賞第6位に輝き、
                80以上のメディアに取り上げられた既視感ゼロの警察小説！
                累計30万部突破！',
                'author'=>'長岡 弘樹'
            ],
            [
                'id'=>'109',
                'title'=>'ランチのアッコちゃん',
                'rank'=>'7',
                'year_id'=>'11',
                'book_img'=>'2014_07_book.jpg',
                'arasuzi'=>'彼氏にフラれて落ち込んでいた派遣社員の澤田三智子は、
                畏怖する上司、通称“アッコ女史"こと黒田敦子部長から突然、一週間のランチ交換を命じられる。
                アッコ女史の風変わりなお昼のコースを巡るうち、自然と活力が湧いている自分に気づいて……。
                表題作ほか、「読むと元気になる! 」と絶賛され、本屋大賞にもノミネートされたビタミン小説。',
                'author'=>'柚木 麻子'
            ],
            [
                'id'=>'110',
                'title'=>'想像ラジオ',
                'rank'=>'8',
                'year_id'=>'11',
                'book_img'=>'2014_08_book.jpg',
                'arasuzi'=>'想像ラジオはタレントとしても知られているいとうせいこうさんの小説です。東日本大震災を題材とした作品で2013年に発売されました。文庫化もされています。東日本大震災で亡くなったひとりの男性が想像の中で聞こえるラジオのDJとして死者と生者にむけてオンエアをしていきます。野間文芸新人賞を受賞した作品です。',
                'author'=>'いとうせいこう'
            ],
            [
                'id'=>'111',
                'title'=>'聖なる怠け者の冒険',
                'rank'=>'9',
                'year_id'=>'11',
                'book_img'=>'2014_09_book.jpg',
                'arasuzi'=>'【文学/日本文学小説】社会人２年目の小和田君は仕事が終われば独身寮での夜更かしを楽しみとする地味な生活。ある日、狸のお面をかぶった「ぽんぽこ仮面」との出会いから、めくるめく冒険の一日が幕を開ける。第２回京都本大賞受賞作！',
                'author'=>'森見 登美彦'
            ],
            [
                'id'=>'112',
                'title'=>'去年の冬、きみと別れ',
                'rank'=>'10',
                'year_id'=>'11',
                'book_img'=>'2014_10_book.jpg',
                'arasuzi'=>'ライターの「僕」は、ある猟奇殺人事件の被告に面会に行く。彼は、二人の女性を殺した容疑で逮捕され、死刑判決を受けていた。調べを進めるほど、事件の異様さにのみ込まれていく「僕」。そもそも、彼はなぜ事件を起こしたのか?それは本当に殺人だったのか?何かを隠し続ける被告、男の人生を破滅に導いてしまう被告の姉、大切な誰かを失くした人たちが群がる人形師。それぞれの狂気が暴走し、真相は迷宮入りするかに思われた。だが-。日本と世界を震撼させた著者が紡ぐ、戦慄のミステリー!',
                'author'=>'中村 文則'
            ],
            [
                'id'=>'113',
                'title'=>'鹿の王',
                'rank'=>'1',
                'year_id'=>'12',
                'book_img'=>'2015_01_book.jpg',
                'arasuzi'=>'真那の姪を診るために恋人のミラルと清心教医術の発 祥の地・安房那領を訪れた天才医術師・ホッサル。しかし思いがけぬ成り行きから、東乎瑠帝国の次期皇帝を巡る争いに巻き込まれてしまい……！？',
                'author'=>'上橋 菜穂子'
            ],
            [
                'id'=>'114',
                'title'=>'サラバ!',
                'rank'=>'2',
                'year_id'=>'12',
                'book_img'=>'2015_02_book.jpg',
                'arasuzi'=>'僕はこの世界に左足から登場した――。
                圷歩は、父の海外赴任先であるイランの病院で生を受けた。その後、父母、そして問題児の姉とともに、イラン革命のために帰国を余儀なくされた歩は、大阪での新生活を始める。幼稚園、小学校で周囲にすぐに溶け込めた歩と違って姉は「ご神木」と呼ばれ、孤立を深めていった。
                そんな折り、父の新たな赴任先がエジプトに決まる。メイド付きの豪華なマンション住まい。初めてのピラミッド。日本人学校に通うことになった歩は、ある日、ヤコブというエジプト人の少年と出会うことになる。',
                'author'=>'西 加奈子'
            ],
            [
                'id'=>'115',
                'title'=>'ハケンアニメ!',
                'rank'=>'3',
                'year_id'=>'12',
                'book_img'=>'2015_03_book.jpg',
                'arasuzi'=>'「どうして、アニメ業界に入ったんですか？」
                男も女もない過酷な現場で、
                目の前の仕事に打ち込むプロたちが、
                追い求めるものはいったい何なのか？
                監督・プロデューサー・声優・アニメーターたちが登場。
                辻村深月が紡ぎ出す最高に刺激的なお仕事小説！',
                'author'=>'辻村 深月'
            ],
            [
                'id'=>'116',
                'title'=>'本屋さんのダイアナ',
                'rank'=>'4',
                'year_id'=>'12',
                'book_img'=>'2015_04_book.jpg',
                'arasuzi'=>'私の名は、大穴（ダイアナ）。おかしな名前も、キャバクラ勤めの母が染めた金髪も、はしばみ色の瞳も大嫌い。けれど、小学三年生で出会った彩子がそのすべてを褒めてくれた――。正反対の二人だったが、共通点は本が大好きなこと。地元の公立と名門私立、中学で離れても心はひとつと信じていたのに、思いがけない別れ道が……。少女から大人に変わる十余年を描く、最強のガール・ミーツ・ガール小説。',
                'author'=>'柚木 麻子'
            ],
            [
                'id'=>'117',
                'title'=>'土漠の花',
                'rank'=>'5',
                'year_id'=>'12',
                'book_img'=>'2015_05_book.jpg',
                'arasuzi'=>'ソマリアの国境付近で活動する陸上自衛隊第一空挺団の精鋭達。そこに命を狙われている女性が駆け込んだ時、自衛官達の命を賭けた戦闘が始まった。一人の女性を守ることは自分達の誇りを取り戻すことでもあった。極限状況での男達の確執と友情。次々と試練が降りかかる中、生きて帰ることはできるか?一気読み必至の日本推理作家協会賞受賞作!',
                'author'=>'月村 了衛'
            ],
            [
                'id'=>'118',
                'title'=>'怒り',
                'rank'=>'6',
                'year_id'=>'12',
                'book_img'=>'2015_06_book.jpg',
                'arasuzi'=>'若い夫婦が自宅で惨殺され、現場には「怒」という血文字が残されていた。犯人は山神一也、二十七歳と判明するが、その行方は杳として知れず捜査は難航していた。そして事件から一年後の夏-。房総の港町で働く槇洋平・愛子親子、大手企業に勤めるゲイの藤田優馬、沖縄の離島で母と暮らす小宮山泉の前に、身元不詳の三人の男が現れた。',
                'author'=>'吉田 修一'
            ],
            [
                'id'=>'119',
                'title'=>'満願',
                'rank'=>'7',
                'year_id'=>'12',
                'book_img'=>'2015_07_book.jpg',
                'arasuzi'=>'「もういいんです」人を殺めた女は控訴を取り下げ、静かに刑に服したが……。鮮やかな幕切れに真の動機が浮上する表題作をはじめ、恋人との復縁を望む主人公が訪れる「死人宿」、美しき中学生姉妹による官能と戦慄の「柘榴」、ビジネスマンが最悪の状況に直面する息詰まる傑作「万灯」他、「夜警」「関守」の全六篇を収録。史上初めての三冠を達成したミステリー短篇集の金字塔。山本周五郎賞受賞。',
                'author'=>'米澤 穂信'
            ],
            [
                'id'=>'120',
                'title'=>'キャプテンサンダーボルト',
                'rank'=>'8',
                'year_id'=>'12',
                'book_img'=>'2015_08_book.jpg',
                'arasuzi'=>'キャプテンサンダーボルトは阿部和重さんと伊坂幸太郎さんの二人の人気作家が着想や技術を詰め込んだ冒険活劇小説です。
                蔵王に墜落したB29、鳴神戦隊、謎の感染症とパンデミックの危機など様々な事件や問題に主人公の二人の男が挑んでいきます。息を付かせぬ展開が読者の心をストーリーにひきこんでいくエンターテイメント作品になっています。',
                'author'=>'阿部和重 伊坂幸太郎'
            ],
            [
                'id'=>'121',
                'title'=>'アイネクライネナハトムジーク',
                'rank'=>'9',
                'year_id'=>'12',
                'book_img'=>'2015_09_book.jpg',
                'arasuzi'=>'妻に出て行かれたサラリーマン、声しか知らない相手に恋する美容師、元いじめっ子と再会してしまったOL…。人生は、いつも楽しいことばかりじゃない。でも、運転免許センターで、リビングで、駐輪場で、奇跡は起こる。情けなくも愛おしい登場人物たちが仕掛ける、不器用な駆け引きの数々。明日がきっと楽しくなる、魔法のような連作短編集。',
                'author'=>'伊坂幸太郎'
            ],
            [
                'id'=>'122',
                'title'=>'億男',
                'rank'=>'10',
                'year_id'=>'12',
                'book_img'=>'2015_10_book.jpg',
                'arasuzi'=>'宝くじが当選し、突如大金を手にした一男だが、三億円と共に親友が失踪。「お金と幸せの答え」を求めて、一男の旅がはじまる!',
                'author'=>'川村 元気'
            ],
            [
                'id'=>'123',
                'title'=>'羊と鋼の森',
                'rank'=>'1',
                'year_id'=>'13',
                'book_img'=>'2016_01_book.jpg',
                'arasuzi'=>'世界と調和している。それがどんなに素晴らしいことか。言葉で伝えきれないなら、音で表せるようになればいい。高校生の時、偶然ピアノ調律師の板鳥と出会って以来、調律の世界に魅せられた外村。ピアノを愛する姉妹や先輩、恩師との交流を通じて、成長していく青年の姿を、温かく静謐な筆致で綴った感動作。',
                'author'=>'宮下 奈都'
            ],
            [
                'id'=>'124',
                'title'=>'君の膵臓をたべたい',
                'rank'=>'2',
                'year_id'=>'13',
                'book_img'=>'2016_02_book.jpg',
                'arasuzi'=>'偶然、僕が病院で拾った１冊の文庫本。タイトルは「共病文庫」。
                それはクラスメイトである山内桜良が綴っていた、秘密の日記帳だった。
                そこには、彼女の余命が膵臓の病気により、もういくばくもないと書かれていて――。

                病を患う彼女にさえ、平等につきつけられる残酷な現実。
                【名前のない僕】と【日常のない彼女】が紡ぐ、終わりから始まる物語。
                全ての予想を裏切る結末まで、一気読み必至！',
                'author'=>'住野 よる'
            ],
            [
                'id'=>'125',
                'title'=>'世界の果てのこどもたち',
                'rank'=>'3',
                'year_id'=>'13',
                'book_img'=>'2016_03_book.jpg',
                'arasuzi'=>'珠子、茉莉、美子――3人の少女は、戦時中の満州で出会った。何もかも違う3人は、とあることから確かな友情を築き上げる。やがて終戦が訪れ、3人はそれぞれの道を歩み始める。日本、中国で彼女たちはどう生きたのか。そして再び出会うことはあるのだろか――。',
                'author'=>'中脇 初枝'
            ],
            [
                'id'=>'126',
                'title'=>'永い言い訳',
                'rank'=>'4',
                'year_id'=>'13',
                'book_img'=>'2016_04_book.jpg',
                'arasuzi'=>'妻が死んでも泣けない男のラブストーリー。映画化話題作
                予期せず家族を失った者たちは、どのように人生を取り戻すのか――。人を愛することの「素晴らしさと歯がゆさ」を描ききった物語。',
                'author'=>'西川 美和'
            ],
            [
                'id'=>'127',
                'title'=>'朝が来る',
                'rank'=>'5',
                'year_id'=>'13',
                'book_img'=>'2016_05_book.jpg',
                'arasuzi'=>'長く辛い不妊治療の末、自分たちの子を産めずに特別養子縁組という手段を選んだ夫婦。中学生で妊娠し、断腸の思いで子供を手放すことになった幼い母。それぞれの葛藤、人生を丹念に描いた、胸に迫る長編。第147回直木賞、第15回本屋大賞の受賞作家が到達した新境地。河瀨直美監督も推薦！このラストシーンはとてつもなく強いリアリティがある。「解説」より',
                'author'=>'辻村 深月'
            ],
            [
                'id'=>'128',
                'title'=>'王とサーカス',
                'rank'=>'6',
                'year_id'=>'13',
                'book_img'=>'2016_06_book.jpg',
                'arasuzi'=>'2001年、新聞社を辞めたばかりの太刀洗万智は、編集者から海外旅行特集の協力を頼まれ、事前調査のためネパールに向かう。現地で知り合った少年にガイドを頼み、穏やかな時間を送ろうとしていた太刀洗だったが、王宮では国王をはじめとする王族殺害事件が勃発。太刀洗は早速取材を開始したが、そんな彼女を嘲笑うかのように、彼女の前にはひとつの死体が転がり……。『さよなら妖精』の出来事から十年のときを経て、太刀洗万智は異邦でふたたび大事件に遭遇する。',
                'author'=>'米澤 穂信'
            ],
            [
                'id'=>'129',
                'title'=>'戦場のコックたち',
                'rank'=>'7',
                'year_id'=>'13',
                'book_img'=>'2016_07_book.jpg',
                'arasuzi'=>'1944年6月6日、ノルマンディーが僕らの初陣だった。コックでも銃は持つが、主な武器はナイフとフライパンだ――料理人だった祖母の影響でコック兵となったティム。冷静沈着なリーダーのエド、陽気で気の置けないディエゴ、口の悪い衛生兵スパークなど、個性豊かな仲間たちとともに、過酷な戦場の片隅に小さな「謎」をみつけることを心の慰めとしていたが……『ベルリンは晴れているか』で話題の気鋭による初長編が待望の文庫化。直木賞・本屋大賞候補作。',
                'author'=>'深緑 野分'
            ],
            [
                'id'=>'130',
                'title'=>'流',
                'rank'=>'8',
                'year_id'=>'13',
                'book_img'=>'2016_08_book.jpg',
                'arasuzi'=>'一九七五年、台北。内戦で敗れ、台湾に渡った不死身の祖父は殺された。誰に、どんな理由で？　無軌道に過ごす十七歳の葉秋生は、自らのルーツをたどる旅に出る。台湾から日本、そしてすべての答えが待つ大陸へ。激動の歴史に刻まれた一家の流浪と決断の軌跡をダイナミックに描く一大青春小説。選考委員満場一致、「二十年に一度の傑作」（選考委員の北方謙三氏）と言わしめた直木賞受賞作。',
                'author'=>'東山 彰良'
            ],
            [
                'id'=>'131',
                'title'=>'教団X',
                'rank'=>'9',
                'year_id'=>'13',
                'book_img'=>'2016_09_book.jpg',
                'arasuzi'=>'謎のカルト教団と革命の予感。4人の男女の「運命」が重なり合い、この国を根底から揺さぶり始める。神とは何か。運命とは何か。世界で注目を集める著者の最長にして圧倒的最高傑作。',
                'author'=>'中村 文則'
            ],
            [
                'id'=>'132',
                'title'=>'火花',
                'rank'=>'10',
                'year_id'=>'13',
                'book_img'=>'2016_10_book.jpg',
                'arasuzi'=>'売れない芸人の徳永は、熱海の花火大会で、先輩芸人である神谷と電撃的に出会い、「弟子にして下さい」と申し出た。神谷は天才肌でまた人間味が豊かな人物。「いいよ」という答えの条件は「俺の伝記を書く」こと。神谷も徳永に心を開き、2人は頻繁に会って、神谷は徳永に笑いの哲学を伝授しようとする。吉祥寺の街を歩きまわる2人はさまざまな人間と触れ合うのだったが、やがて2人の歩む道は異なっていく。徳永は少しずつ売れていき、神谷は少しずつ損なわれていくのだった。',
                'author'=>'又吉 直樹'
            ],
            [
                'id'=>'133',
                'title'=>'蜜蜂と遠雷',
                'rank'=>'1',
                'year_id'=>'14',
                'book_img'=>'2017_01_book.jpg',
                'arasuzi'=>'近年その覇者が音楽界の寵児となる芳ヶ江国際ピアノコンクール。 自宅に楽器を持たない少年・風間塵16歳。 かつて天才少女としてデビューしながら突然の母の死以来、弾けなくなった栄伝亜夜20歳。 楽器店勤務のサラリーマン・高島明石28歳。 完璧な技術と音楽性の優勝候補マサル19歳。 天才たちによる、競争という名の自らとの闘い。 その火蓋が切られた。',
                'author'=>'恩田 陸'
            ],
            [
                'id'=>'134',
                'title'=>'みかづき',
                'rank'=>'2',
                'year_id'=>'14',
                'book_img'=>'2017_02_book.jpg',
                'arasuzi'=>'昭和36年。放課後の用務員室で子供たちに勉強を教えていた大島吾郎は、ある少女の母・千明に見込まれ、学習塾を開くことに。この決断が、何代にもわたる大島家の波瀾万丈の人生の幕開けとなる。二人は結婚し、娘も誕生。戦後のベビーブームや高度経済成長の時流に乗り、急速に塾は成長していくが……。',
                'author'=>'森 絵都'
            ],
            [
                'id'=>'135',
                'title'=>'罪の声',
                'rank'=>'3',
                'year_id'=>'14',
                'book_img'=>'2017_03_book.jpg',
                'arasuzi'=>'「週刊文春ミステリーベスト10」第1位、本屋大賞第3位。圧倒的な取材と着想で、昭和最大の未解決事件を描いた傑作長編小説。「これは、自分の声だ」――京都でテーラーを営む曽根俊也は、ある日父の遺品からカセットテープとノートを見つける。テープを再生すると、自分の幼いころの声が聞こえてくる。それは、31年前に発生して未解決のままの「ギン萬事件」で恐喝に使われた録音テープの音声とまったく同じものだった――。',
                'author'=>'塩田 武士'
            ],
            [
                'id'=>'136',
                'title'=>'ツバキ文具店',
                'rank'=>'4',
                'year_id'=>'14',
                'book_img'=>'2017_04_book.jpg',
                'arasuzi'=>'ラブレター、絶縁状、天国からの手紙…。鎌倉で代書屋を営む鳩子の元には、今日も風変わりな依頼が舞い込む。伝えられなかった大切な人への想い。あなたに代わって、お届けします。',
                'author'=>'小川 糸'
            ],
            [
                'id'=>'137',
                'title'=>'桜風堂ものがたり',
                'rank'=>'5',
                'year_id'=>'14',
                'book_img'=>'2017_05_book.jpg',
                'arasuzi'=>'万引き事件がきっかけで長年勤めた書店を辞めることになった一整。しかしある町で訪れた書店で彼に奇跡のような出会いが起こり……。',
                'author'=>'村山 早紀'
            ],
            [
                'id'=>'138',
                'title'=>'暗幕のゲルニカ',
                'rank'=>'6',
                'year_id'=>'14',
                'book_img'=>'2017_06_book.jpg',
                'arasuzi'=>'ニューヨーク、国連本部。イラク攻撃を宣言する米国務長官の背後から、「ゲルニカ」のタペストリーが消えた。MoMAのキュレーター八神瑶子はピカソの名画を巡る陰謀に巻き込まれていく。故国スペイン内戦下に創造した衝撃作に、世紀の画家は何を託したか。ピカソの恋人で写真家のドラ・マールが生きた過去と、瑶子が生きる現代との交錯の中で辿り着く一つの真実。怒涛のアートサスペンス!',
                'author'=>'原田 マハ'
            ],
            [
                'id'=>'139',
                'title'=>'i',
                'rank'=>'7',
                'year_id'=>'14',
                'book_img'=>'2017_07_book.jpg',
                'arasuzi'=>'アメリカ人の父と日本人の母のもとへ、養子としてやってきたアイ。
                内戦、テロ、地震、貧困……世界には悲しいニュースがあふれている。
                なのに、自分は恵まれた生活を送っている。
                そのことを思うと、アイはなんだか苦しくなるが、どうしたらいいかわからない。
                けれど、やがてアイは、親友と出会い、愛する人と家族になり、ひとりの女性として自らの手で扉を開ける――
                たとえ理解できなくても、愛することはできる。
                世界を変えられないとしても、想うことはできる。
                西加奈子の渾身の叫びに、深く心を揺さぶられる長編小説。',
                'author'=>'西 加奈子'
            ],
            [
                'id'=>'140',
                'title'=>'夜行',
                'rank'=>'8',
                'year_id'=>'14',
                'book_img'=>'2017_08_book.jpg',
                'arasuzi'=>'怪談×青春×ファンタジー、かつてない物語

                「夜はどこにでも通じているの。世界はつねに夜なのよ」
                私たち六人は、京都で学生時代を過ごした仲間だった。十年前、鞍馬の火祭りを訪れた私たちの前から、長谷川さんは突然姿を消した。十年ぶりに鞍馬に集まったのは、おそらく皆、もう一度彼女に会いたかったからだ。夜が更けるなか、それぞれが旅先で出会った不思議な体験を語り出す。私たちは全員、岸田道生という画家が描いた「夜行」という絵と出会っていた。
                怪談×青春×ファンタジー、かつてない物語。

                春風の花を散らすと見る夢は
                さめても胸の騒ぐなりけり
                --西行法師',
                'author'=>'森見 登美彦'
            ],
            [
                'id'=>'141',
                'title'=>'コンビニ人間',
                'rank'=>'9',
                'year_id'=>'14',
                'book_img'=>'2017_09_book.jpg',
                'arasuzi'=>'「普通」とは何か？現代の実存を軽やかに問う第155回芥川賞受賞作36歳未婚、彼氏なし。コンビニのバイト歴18年目の古倉恵子。日々コンビニ食を食べ、夢の中でもレジを打ち、「店員」でいるときのみ世界の歯車になれる――。「いらっしゃいませー!!」お客様がたてる音に負けじと、今日も声を張り上げる。ある日、婚活目的の新入り男性・白羽がやってきて、そんなコンビニ的生き方は恥ずかしい、と突きつけられるが……。',
                'author'=>'村田 沙耶香'
            ],
            [
                'id'=>'142',
                'title'=>'コーヒーが冷めないうちに',
                'rank'=>'10',
                'year_id'=>'14',
                'book_img'=>'2017_10_book.jpg',
                'arasuzi'=>'お願いします、あの日に戻らせてください-。「ここに来れば、過去に戻れるって、ほんとうですか?」不思議なうわさのある喫茶店フニクリフニクラを訪れた4人の女性たちが紡ぐ、家族と、愛と、後悔の物語。',
                'author'=>'川口 俊和'
            ],

        ]);
    }
}
