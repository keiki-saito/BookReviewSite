<?php

use Illuminate\Database\Seeder;

class BookTableSeeder03 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //2010~2013
    public function run()
    {
        DB::table('books')->insert([
            [
                'id'=>'62',
                'title'=>'天地明察',
                'rank'=>'1',
                'year_id'=>'7',
                'book_img'=>'2010_01_book.jpg',
                'arasuzi'=>'四代将軍家綱の治世、ある事業が立ちあがる。それは日本独自の暦を作ること。当時使われていた暦は正確さを失いずれが生じ始めていた－－。日本文化を変えた大計画を個の成長物語として瑞々しく重厚に描く時代小説',
                'author'=>'冲方 丁'
            ],
            [
                'id'=>'63',
                'title'=>'神様のカルテ',
                'rank'=>'2',
                'year_id'=>'7',
                'book_img'=>'2010_02_book.jpg',
                'arasuzi'=>'神の手を持つ医者はいなくても、この病院では奇蹟が起きる。夏目漱石を敬愛し、ハルさんを愛する青年は、信州にある「24時間、365日対応」の病院で、今日も勤務中。読んだ人すべての心を温かくする、新たなベストセラー。第十回小学館文庫小説賞受賞。',
                'author'=>'夏川 草介'
            ],
            [
                'id'=>'64',
                'title'=>'横道世之介',
                'rank'=>'3',
                'year_id'=>'7',
                'book_img'=>'2010_03_book.jpg',
                'arasuzi'=>'大学進学のため長崎から上京した横道世之介18歳。愛すべき押しの弱さと隠された芯の強さで、様々な出会いと笑いを引き寄せる。友の結婚に出産、学園祭のサンバ行進、お嬢様との恋愛、カメラとの出会い…。誰の人生にも温かな光を灯す、青春小説の金字塔。第7回本屋大賞第3位に選ばれた、柴田錬三郎賞受賞作。',
                'author'=>'吉田 修一'
            ],
            [
                'id'=>'65',
                'title'=>'神去なあなあ日常',
                'rank'=>'4',
                'year_id'=>'7',
                'book_img'=>'2010_04_book.jpg',
                'arasuzi'=>'大平野勇気、１８歳。高校を出たらフリーターで食っていこうと思っていた。でもなぜか三重県の林業の現場に放り込まれてしまいーー。携帯も通じない山奥！ダニやヒルの襲来！勇気は無事、一人前になれるのか……？　四季のうつくしい神去村で、勇気と個性的な村人たちが繰り広げる騒動記！林業エンタテインメント小説の傑作。',
                'author'=>'三浦 しをん'
            ],
            [
                'id'=>'66',
                'title'=>'猫を抱いて象と泳ぐ',
                'rank'=>'5',
                'year_id'=>'7',
                'book_img'=>'2010_05_book.jpg',
                'arasuzi'=>'「大きくなること、それは悲劇である」。この箴言を胸に十一歳の身体のまま成長を止めた少年は、からくり人形を操りチェスを指すリトル・アリョーヒンとなる。盤面の海に無限の可能性を見出す彼は、いつしか「盤下の詩人」として奇跡のような棋譜を生み出す。静謐にして美しい、小川ワールドの到達点を示す傑作。',
                'author'=>'小川 洋子'
            ],
            [
                'id'=>'67',
                'title'=>'ヘヴン',
                'rank'=>'6',
                'year_id'=>'7',
                'book_img'=>'2010_06_book.jpg',
                'arasuzi'=>'＜わたしたちは仲間です＞――十四歳のある日、同級生からの苛（いじ）めに耐える＜僕＞は、差出人不明の手紙を受け取る。苛められる者同士が育んだ密やかで無垢な関係はしかし、奇妙に変容していく。葛藤の末に選んだ世界で、僕が見たものとは。善悪や強弱といった価値観の根源を問い、圧倒的な反響を得た著者の新境地。',
                'author'=>'川上 未映子'
            ],
            [
                'id'=>'68',
                'title'=>'船に乗れ!',
                'rank'=>'7',
                'year_id'=>'7',
                'book_img'=>'2010_07_book.jpg',
                'arasuzi'=>'高校の音楽科に通う主人公・津島サトルと個性豊かな仲間たち。彼らが過ごす音楽漬けの日々に、青春時代のきらめきと切なさを色濃く映し出した、本格青春小説三部作。爽快な第一楽章。',
                'author'=>'藤谷 治'
            ],
            [
                'id'=>'69',
                'title'=>'植物図鑑',
                'rank'=>'8',
                'year_id'=>'7',
                'book_img'=>'2010_08_book.jpg',
                'arasuzi'=>'お嬢さん、よかったら俺を拾ってくれませんか。咬みません。躾のできたよい子です-。思わず拾ってしまったイケメンは、家事万能のスーパー家政夫のうえ、重度の植物オタクだった。樹という名前しか知らされぬまま、週末ごとにご近所で「狩り」する風変わりな同居生活が始まった。とびきり美味しい(ちょっぴりほろ苦)"道草"恋愛小説。レシピ付き。',
                'author'=>'有川 浩'
            ],
            [
                'id'=>'70',
                'title'=>'新参者',
                'rank'=>'9',
                'year_id'=>'7',
                'book_img'=>'2010_09_book.jpg',
                'arasuzi'=>'立ちはだかるのは、人情という名の謎。日本橋で発見された女性の絞殺死体。着任したばかりの刑事・加賀は、この未知の街を歩き回る。',
                'author'=>'東野 圭吾'
            ],
            [
                'id'=>'71',
                'title'=>'1Q84',
                'rank'=>'10',
                'year_id'=>'7',
                'book_img'=>'2010_10_book.jpg',
                'arasuzi'=>'「こうであったかもしれない」過去が、その暗い鏡に浮かび上がらせるのは、「そうではなかったかもしれない」現在の姿だ。書き下ろし長編小説。',
                'author'=>'村上 春樹'
            ],
            [
                'id'=>'72',
                'title'=>'謎解きはディナーのあとで',
                'rank'=>'1',
                'year_id'=>'8',
                'book_img'=>'2011_01_book.jpg',
                'arasuzi'=>'山奥のホテル『奥多摩荘』で、国会議員・梶原竜之介の七十歳の誕生日を祝い、後継者となる息子をお披露目するパーティが開かれる。招待された麗子は、執事の影山を伴い、ドレスアップして会場に赴いた。
                賑やかな宴の最中、男性客が飲み物に毒を盛られて死亡する事件が発生。さらに、長雨による土砂崩れで奥多摩荘に通じる山道は通行不能となり、客たちは会場に閉じ込められる。
                警視庁に栄転した風祭警部の登場で、元上司とまさかの再会を果たした麗子は、真相を究明すべく事件に挑むが･･････!?',
                'author'=>'東川 篤哉'
            ],
            [
                'id'=>'73',
                'title'=>'ふがいない僕は空を見た',
                'rank'=>'2',
                'year_id'=>'8',
                'book_img'=>'2011_02_book.jpg',
                'arasuzi'=>'高校一年の斉藤くんは、年上の主婦と週に何度かセックスしている。やがて、彼女への気持ちが性欲だけではなくなってきたことに気づくのだが-。姑に不妊治療をせまられる女性。ぼけた祖母と二人で暮らす高校生。助産院を営みながら、女手一つで息子を育てる母親。それぞれが抱える生きることの痛みと喜びを鮮やかに写し取った連作長編',
                'author'=>'窪 美澄'
            ],
            [
                'id'=>'74',
                'title'=>'ペンギン・ハイウェイ',
                'rank'=>'3',
                'year_id'=>'8',
                'book_img'=>'2011_03_book.jpg',
                'arasuzi'=>'ペンギン・ハイウェイは森見登美彦さんが小学４年生の少年を主人公にした小説です。
                この作品は森見さんの記念すべき１０作目となります。少年の住む郊外の町にある日突然ペンギンが現れます。この事件に近所のお姉さんの不思議な力が関わっていることを知り、調べ始めることにします。ペンギン・ハイウェイはSF小説ですが、少年の好奇心がよく描かれていて児童文学としても楽しめます。',
                'author'=>'森見 登美彦'
            ],
            [
                'id'=>'75',
                'title'=>'錨を上げよ',
                'rank'=>'4',
                'year_id'=>'8',
                'book_img'=>'2011_04_book.jpg',
                'arasuzi'=>'戦争が終わってちょうど十年目、いまだ空襲の跡が残る大阪の下町に生まれた作田又三。高度経済成長、六十年安保闘争、東京オリンピック、大阪万博、よど号ハイジャック事件、日本列島改造論、石油ショック-激動の昭和の時代、生まれながらの野生児、作田又三は、人生という荒海を渡っていく。いざ、海図なき嵐の海へ。さあ、錨を上げよ!疾風怒濤の2400枚。圧倒的青春小説。',
                'author'=>'百田 尚樹'
            ],
            [
                'id'=>'76',
                'title'=>'シューマンの指',
                'rank'=>'5',
                'year_id'=>'8',
                'book_img'=>'2011_05_book.jpg',
                'arasuzi'=>'音大のピアノ科を目指していた私は、後輩の天才ピアニスト永嶺修人が語るシューマンの音楽に傾倒していく。浪人が決まった春休みの夜、高校の音楽室で修人が演奏する「幻想曲」を偶然耳にした直後、プールで女子高生が殺された。その後、指を切断したはずの修人が海外でピアノを弾いていたという噂が……。',
                'author'=>'奥泉 光'
            ],
            [
                'id'=>'77',
                'title'=>'叫びと祈り',
                'rank'=>'6',
                'year_id'=>'8',
                'book_img'=>'2011_06_book.jpg',
                'arasuzi'=>'ひとりの青年が世界各国で遭遇する、数々の異様な謎。ミステリーズ！新人賞受賞作「砂漠を走る船の道」を巻頭に据えた驚異の連作推理。激賞を浴びた大型新人のデビュー作！',
                'author'=>'梓崎 優'
            ],
            [
                'id'=>'78',
                'title'=>'悪の教典',
                'rank'=>'7',
                'year_id'=>'8',
                'book_img'=>'2011_07_book.jpg',
                'arasuzi'=>'とびきり有能な教師がサイコパスだったとしたら、その凶行は誰が止められるのか──ピカレスクの輝きを秘めた戦慄のサイコ・ホラー。2010年度「このミステリーがすごい!」第1位、「週刊文春ミステリーベスト10」第1位、第1回山田風太郎賞。',
                'author'=>'貴志 祐介'
            ],
            [
                'id'=>'79',
                'title'=>'神様のカルテ2',
                'rank'=>'8',
                'year_id'=>'8',
                'book_img'=>'2011_08_book.jpg',
                'arasuzi'=>'栗原一止は、夏目漱石を敬愛する信州の内科医だ。「二十四時間、三百六十五日対応」を掲げる本庄病院で連日連夜不眠不休の診療を続けている。四月、東京の大病院から新任の医師・進藤辰也がやってくる。一止と信濃大学の同級生だった進藤は、かつて"医学部の良心"と呼ばれたほどの男である。だが着任後の進藤に、病棟内で信じがたい悪評が立つ。失意する一止をさらなる試練が襲う。副部長先生の突然の発病-この病院で、再び奇蹟は起きるのか。',
                'author'=>'夏川 草介'
            ],
            [
                'id'=>'80',
                'title'=>'キケン',
                'rank'=>'9',
                'year_id'=>'8',
                'book_img'=>'2011_09_book.jpg',
                'arasuzi'=>'ごく一般的な工科大学である成南電気工科大学のサークル「機械制御研究部」、略称【キケン】。部長*上野、副部長*大神の二人に率いられたこの集団は、日々繰り広げられる、人間の所行とは思えない事件、犯罪スレスレの実験や破壊的行為から、キケン＝危険として周囲から忌み畏れられていた。これは、理系男子たちの爆発的熱量と共に駆け抜けた、その黄金時代を描く青春物語である。',
                'author'=>'有川 浩'
            ],
            [
                'id'=>'81',
                'title'=>'ストーリー・セラー',
                'rank'=>'10',
                'year_id'=>'8',
                'book_img'=>'2011_10_book.jpg',
                'arasuzi'=>'妻の病名は、致死性脳劣化症候群。複雑な思考をすればするほど脳が劣化し、やがて死に至る不治の病。生きたければ、作家という仕事を辞めるしかない。医師に宣告された夫は妻に言った。「どんなひどいことになっても俺がいる。だから家に帰ろう」。妻は小説を書かない人生を選べるのか。極限に追い詰められた夫婦を描く、心震えるストーリー。',
                'author'=>'有川 浩'
            ],
            [
                'id'=>'82',
                'title'=>'舟を編む',
                'rank'=>'1',
                'year_id'=>'9',
                'book_img'=>'2012_01_book.jpg',
                'arasuzi'=>'出版社の営業部員・馬締光也は、言葉への鋭いセンスを買われ、辞書編集部に引き抜かれた。新しい辞書『大渡海』の完成に向け、彼と編集部の面々の長い長い旅が始まる。定年間近のベテラン編集者。日本語研究に人生を捧げる老学者。辞書作りに情熱を持ち始める同僚たち。そして馬締がついに出会った運命の女性。不器用な人々の思いが胸を打つ本屋大賞受賞作!',
                'author'=>'三浦 しをん'
            ],
            [
                'id'=>'83',
                'title'=>'ジェノサイド',
                'rank'=>'2',
                'year_id'=>'9',
                'book_img'=>'2012_02_book.jpg',
                'arasuzi'=>'イラクで戦うアメリカ人傭兵と日本で薬学を専攻する大学院生。二人の運命が交錯する時、全世界を舞台にした大冒険の幕が開く。アメリカの情報機関が察知した人類絶滅の危機とは何か。一気読み必至の超弩級エンタメ！',
                'author'=>'高野 和明'
            ],
            [
                'id'=>'84',
                'title'=>'ピエタ',
                'rank'=>'3',
                'year_id'=>'9',
                'book_img'=>'2012_03_book.jpg',
                'arasuzi'=>'18世紀ヴェネツィア。『四季』の作曲家ヴィヴァルディは、
                孤児たちを養育するピエタ慈善院で、〈合奏・合唱の娘たち〉を指導していた。
                ある日教え子エミーリアのもとに恩師の訃報が届く――
                史実を基に、女性たちの交流と絆を瑞々しく描きだした傑作。',
                'author'=>'大島 真寿美'
            ],
            [
                'id'=>'85',
                'title'=>'くちびるに歌を',
                'rank'=>'4',
                'year_id'=>'9',
                'book_img'=>'2012_04_book.jpg',
                'arasuzi'=>'長崎県五島列島のある中学合唱部が物語の舞台。合唱部顧問の音楽教師・松山先生は、産休に入るため、中学時代の同級生で東京の音大に進んだ柏木に、1年間の期限付きで合唱部の指導を依頼する。
                それまでは、女子合唱部員しかいなかったが、美人の柏木先生に魅せられ、男子生徒が多数入部。ほどなくして練習にまじめに打ち込まない男子部員と女子部員の対立が激化する。
                一方で、柏木先生は、Nコン（NHK全国学校音楽コンクール）の課題曲「手紙～拝啓 十五の君へ～」にちなみ、十五年後の自分に向けて手紙を書くよう、部員たちに宿題を課していた。
                提出は義務づけていなかったこともあってか、彼らの書いた手紙には、誰にもいえない、等身大の秘密が綴られていた--。',
                'author'=>'中田 永一'
            ],
            [
                'id'=>'86',
                'title'=>'人質の朗読会',
                'rank'=>'5',
                'year_id'=>'9',
                'book_img'=>'2012_05_book.jpg',
                'arasuzi'=>'遠く隔絶された場所から、彼らの声は届いた――紙をめくる音、咳払い、慎み深い拍手で朗読会が始まる。祈りにも似たその行為に耳を澄ませるのは、人質たちと見張り役の犯人、そして……。人生のささやかな一場面が鮮やかに甦る。それは絶望ではなく、今日を生きるための物語。今はもういない人たちの声、誰の中にもある「物語」をそっとすくい上げて、しみじみと深く胸を打つ、小川洋子ならではの小説世界。',
                'author'=>'小川 洋子'
            ],
            [
                'id'=>'87',
                'title'=>'ユリゴコロ',
                'rank'=>'6',
                'year_id'=>'9',
                'book_img'=>'2012_06_book.jpg',
                'arasuzi'=>'ある一家で見つかった「ユリゴコロ」と題されたノート。それは殺人に取り憑かれた人間の生々しい告白文だった。
                この一家の過去にいったい何があったのか?絶望的な暗黒の世界から一転、深い愛へと辿り着くラストまで、ページを繰る手が止まらない衝撃の恋愛ミステリー!',
                'author'=>'沼田 まほかる'
            ],
            [
                'id'=>'88',
                'title'=>'誰かが足りない',
                'rank'=>'7',
                'year_id'=>'9',
                'book_img'=>'2012_07_book.jpg',
                'arasuzi'=>'予約を取ることも難しい、評判のレストラン『ハライ』。
                10月31日午後6時に、たまたま店にいた客たちの、それぞれの物語。
                認知症の症状が出始めた老婦人、
                ビデオを撮っていないと部屋の外に出られない青年、
                人の失敗の匂いを感じてしまう女性など、6人の人生と後悔や現状の悩みを描く。
                「ハライに行って、美味しいものを食べる」ことをひとつのきっかけにして、
                前に進もうとする気持ちを、それぞれ丹念にすくいとっていく。',
                'author'=>'宮下 奈都'
            ],
            [
                'id'=>'89',
                'title'=>'ビブリア古書堂の事件手帖 ~栞子さんと奇妙な客人たち~ ',
                'rank'=>'8',
                'year_id'=>'9',
                'book_img'=>'2012_08_book.jpg',
                'arasuzi'=>'鎌倉の片隅でひっそりと営業をしている古本屋「ビブリア古書堂」。そこの店主は古本屋のイメージに合わない、若くきれいな女性だ。だが、初対面の人間とは口もきけない人見知り。接客業を営む者として心配になる女性だった。',
                'author'=>'三上 延'
            ],
            [
                'id'=>'90',
                'title'=>'偉大なる、しゅららぼん',
                'rank'=>'9',
                'year_id'=>'9',
                'book_img'=>'2012_09_book.jpg',
                'arasuzi'=>'古くより対立する日出家と棗家。迫る存亡の危機を力を合わせて斥けられるのか!? 万城目ワールド全開のスーパーエンターテイメント。',
                'author'=>'万城目 学'
            ],
            [
                'id'=>'91',
                'title'=>'プリズム',
                'rank'=>'10',
                'year_id'=>'9',
                'book_img'=>'2012_10_book.jpg',
                'arasuzi'=>'ある資産家の家に家庭教師として通う聡子。彼女の前に屋敷の離れに住む青年が現れる。ときに荒々しく怒鳴りつけ、ときに馴れ馴れしくキスを迫り、ときに紳士的に振る舞う態度に困惑しながらも、聡子は彼に惹かれていく。しかしある時、彼は衝撃の告白をする。「僕は、実際には存在しない男なんです」。感涙必至の、かつてない長編恋愛サスペンス。',
                'author'=>'百田 尚樹'
            ],
            [
                'id'=>'92',
                'title'=>'海賊とよばれた男',
                'rank'=>'1',
                'year_id'=>'10',
                'book_img'=>'2013_01_book.jpg',
                'arasuzi'=>'一九四五年八月十五日、敗戦で全てを失った日本で一人の男が立ち上がる。男の名は国岡鐡造。出勤簿もなく、定年もない、異端の石油会社「国岡商店」の店主だ。一代かけて築き上げた会社資産の殆どを失い、借金を負いつつも、店員の一人も馘首せず、再起を図る。石油を武器に世界との新たな戦いが始まる。',
                'author'=>'百田 尚樹'
            ],
            [
                'id'=>'93',
                'title'=>'64',
                'rank'=>'2',
                'year_id'=>'10',
                'book_img'=>'2013_02_book.jpg',
                'arasuzi'=>'昭和64年に起きたD県警史上最悪の誘拐殺害事件を巡り、刑事部と警務部が全面戦争に突入。広報・三上は己の真を問われる。究極の警察小説!',
                'author'=>'横山 秀夫'
            ],
            [
                'id'=>'94',
                'title'=>'楽園のカンヴァス',
                'rank'=>'3',
                'year_id'=>'10',
                'book_img'=>'2013_03_book.jpg',
                'arasuzi'=>'ニューヨーク近代美術館のキュレーター、ティム・ブラウンはある日スイスの大邸宅に招かれる。そこで見たのは巨匠ルソーの名作「夢」に酷似した絵。持ち主は正しく真贋判定した者にこの絵を譲ると告げ、手がかりとなる謎の古書を読ませる。リミットは7日間。ライバルは日本人研究者・早川織絵。ルソーとピカソ、二人の天才がカンヴァスに籠めた想いとは――。山本周五郎賞受賞作。',
                'author'=>'横山 秀夫'
            ],
            [
                'id'=>'95',
                'title'=>'きみはいい子',
                'rank'=>'4',
                'year_id'=>'10',
                'book_img'=>'2013_04_book.jpg',
                'arasuzi'=>'同じ町に暮らす人々の、同じ雨の午後を描く連作短編集。それぞれの家族が抱える傷と、それでもそこに射す光を描き出す感動作。',
                'author'=>'中脇 初枝'
            ],
            [
                'id'=>'96',
                'title'=>'ふくわらい',
                'rank'=>'5',
                'year_id'=>'10',
                'book_img'=>'2013_05_book.jpg',
                'arasuzi'=>'【文学/日本文学小説】書籍編集者の鳴木戸定。彼女は幼い頃、紀行作家の父と行った旅先で特異な体験をする。不器用に生きる定はある日、自分を取り巻く世界の素晴らしさに気づき、溢れ出す熱い思いを止めることができなかった。第１回河合隼雄物語賞受賞作。',
                'author'=>'中脇 初枝'
            ],
            [
                'id'=>'97',
                'title'=>'晴天の迷いクジラ',
                'rank'=>'6',
                'year_id'=>'10',
                'book_img'=>'2013_06_book.jpg',
                'arasuzi'=>'デザイン会社に勤める由人は、失恋と激務でうつを発症した。社長の野乃花は、潰れゆく会社とともに人生を終わらせる決意をした。死を選ぶ前にと、湾に迷い込んだクジラを見に南の半島へ向かった二人は、道中、女子高生の正子を拾う。母との関係で心を壊した彼女もまた、生きることを止めようとしていた――。苛烈な生と、その果ての希望を鮮やかに描き出す長編。山田風太郎賞受賞作。',
                'author'=>'窪 美澄'
            ],
            [
                'id'=>'98',
                'title'=>'ソロモンの偽証',
                'rank'=>'7',
                'year_id'=>'10',
                'book_img'=>'2013_07_book.jpg',
                'arasuzi'=>'クリスマスの朝、雪の校庭に急降下した14歳。彼の死を悼む声は小さかった。けど、噂は強力で、気がつけばあたしたちみんな、それに加担していた。そして、その悪意ある風評は、目撃者を名乗る、匿名の告発状を産み落とした-。新たな殺人計画。マスコミの過剰な報道。狂おしい嫉妬による異常行動。そして犠牲者が一人、また一人。学校は汚された。ことごとく無力な大人たちにはもう、任せておけない。学校に仕掛けられた史上最強のミステリー。',
                'author'=>'宮部 みゆき'
            ],
            [
                'id'=>'99',
                'title'=>'世界から猫が消えたなら',
                'rank'=>'8',
                'year_id'=>'10',
                'book_img'=>'2013_08_book.jpg',
                'arasuzi'=>'世界から猫が消えたならは、脳腫瘍が見つかり、 余命わずかであることを宣告された、ちょっと映画オタクで猫とふたり暮らしの郵便局員の男性が主人公の物語です。
                自分と全く同じ姿をした男がいきなり現れ、男は悪魔だと言い、奇妙な取引を持ちかけます。
                「世界から1つ何かを消す。その代わりに1日だけ命を得ることができる」
                生きる為に、消すことを決意した主人公と猫と悪魔の7日間が始まります。',
                'author'=>'川村 元気',
            ],
            [
                'id'=>'100',
                'title'=>'百年法',
                'rank'=>'9',
                'year_id'=>'10',
                'book_img'=>'2013_09_book.jpg',
                'arasuzi'=>'不老不死が実現した日本。しかし、法律により百年後に死ななければならない――西暦2048年。百年の生と引き替えに、不老処置を受けた人々の100年目の死の強制が目前に迫っていた。その時人々の選択は――!?',
                'author'=>'山田 宗樹',
            ],
            [
                'id'=>'101',
                'title'=>'屍者の帝国',
                'rank'=>'10',
                'year_id'=>'10',
                'book_img'=>'2013_10_book.jpg',
                'arasuzi'=>'屍者化の技術が全世界に拡散した19世紀末、英国秘密諜報員ジョン・H・ワトソンの冒険がいま始まる。天才・伊藤計劃の未完の絶筆を盟友・円城塔が完成させた超話題作。日本SF大賞特別賞、星雲賞受賞。',
                'author'=>'伊藤計劃 円城塔',
            ],
            [
                'id'=>'102',
                'title'=>'光圀伝',
                'rank'=>'11',
                'year_id'=>'10',
                'book_img'=>'2013_11_book.jpg',
                'arasuzi'=>'何故この世に歴史が必要なのか。生涯を賭した「大日本史」の編纂という大事業。大切な者の命を奪ってまでも突き進まねばならなかった、孤高の虎・水戸光圀の生き様に迫る。',
                'author'=>'冲方 丁',
            ],

        ]);
    }
}