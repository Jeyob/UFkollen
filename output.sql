PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;
CREATE TABLE "Users" (
    "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    "username" TEXT NOT NULL,
    "password" TEXT NOT NULL
);
INSERT INTO "Users" VALUES(1,'eden','7e1a80fe794652f0748c6afb03c1761b');
CREATE TABLE "Categories" (
    "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    "name" TEXT NOT NULL,
    "imgPath" TEXT
);
INSERT INTO "Categories" VALUES(1,'Elektronik',NULL);
INSERT INTO "Categories" VALUES(2,'Telefoni',NULL);
INSERT INTO "Categories" VALUES(3,'Hobby & Fritid',NULL);
INSERT INTO "Categories" VALUES(4,'Skönhet & Hudvård',NULL);
INSERT INTO "Categories" VALUES(5,'Mode & Accessoarer',NULL);
INSERT INTO "Categories" VALUES(6,'Tjänster',NULL);
INSERT INTO "Categories" VALUES(7,'Övrigt',NULL);
CREATE TABLE companies (
    "id"  INTEGER PRIMARY KEY  AUTOINCREMENT NOT NULL,
    "name" TEXT NOT NULL,
    "address" TEXT,
 "logopath" TEXT,
 "productpath" TEXT,
 "productdesc" TEXT,
 "categoryid" INTEGER NOT NULL,
 foreign key (categoryid) references Categories(id));
INSERT INTO "companies" VALUES(1,'werwe','werw','uploads/Förslag_plus_CV.pdf','uploads/Exjobbsförslag.pdf','wrwer',3);
INSERT INTO "companies" VALUES(2,'werwe','werw','uploads/Förslag_plus_CV.pdf','uploads/Exjobbsförslag.pdf','wrwer',3);
INSERT INTO "companies" VALUES(3,'Apple','San paulo','uploads/Förslag_plus_CV.pdf','uploads/CV.pdf','Ipods',5);
INSERT INTO "companies" VALUES(4,'ZeroPoint','SOmewhere','uploads/CV.pdf','uploads/Exjobbsförslag.pdf','Lorem ipsum dolor sit amet, eos ad lucilius vituperata complectitur. Postea dicunt in eos. Ne omnis liberavisse disputationi eum. Eu eius scriptorem ius, ea has audire denique suscipiantur. Est id platonem iudicabit instructior.<br>
Inciderint voluptatibus definitionem in mea, putent vidisse ex mei. Luptatum eleifend accusamus vim ad. Eos nostrum molestie ne, discere accommodare est te, invidunt repudiare nec no. Qui modus animal abhorreant ex, has id prima integre. Ne discere inermis sadipscing sea, duo cu putant minimum sadipscing.<br>

Cu mei clita efficiendi, at pro tamquam sanctus adolescens. Pri et temporibus necessitatibus. Pri eu natum dignissim gloriatur, etiam iusto quaeque et est, at per veri elitr adversarium. Delectus elaboraret ut qui, in malis eirmod similique his. Nec nullam eripuit expetendis no, laudem dolores usu ne, periculis incorrupte vis no.
Te minim erant noster mei, his eu reque facilisi, essent eligendi theophrastus mei ei. Quo cu malis legimus epicuri, vix cu summo debet aliquid. Eos id solum invenire partiendo. Sonet conceptam nec ex, eum te malis graecis mandamus, harum dolorem pro id. Veri vocibus est te, rebum repudiare elaboraret nec an. In melius scriptorem consectetuer nec.<br>

<br>Per fabulas honestatis ea. Eum cu causae saperet accommodare. Eius erat gloriatur eum ei. Duo an splendide abhorreant dissentias, cetero repudiare quo ex. Nostro viderer lobortis mea te.',6);
INSERT INTO "companies" VALUES(5,'zorro','Hej','uploads/CV.pdf','uploads/Exjobbsförslag.pdf','idfodf',5);
INSERT INTO "companies" VALUES(6,'LDyyiuvVO','WCUiaQ VL','mwgC uZZBM','OtAqMAc As','Im XwLmma',3);
INSERT INTO "companies" VALUES(7,'AUWGmacmFC','O CCjnqNWK','ktFyEplBOE','ukqzpEtRUu','Wtwe yD tx',3);
INSERT INTO "companies" VALUES(8,'VFgD cfGYG','qe YMXTGhy','BJMeNi AA','wrc olnKXb','d UVdYg WG',3);
INSERT INTO "companies" VALUES(9,'J Bbiu QG','ngzCkKNv U','PfpVn Ooze','WNEdp f qk','waeHvs UuR',3);
INSERT INTO "companies" VALUES(10,'dAKkHcr','WAUGRrYZlx','x OWzRKXs','CXgGaWIzo','RMpBNpbrNW',3);
INSERT INTO "companies" VALUES(11,'KQrrO rwW','oF CClqzFI','NmELFmKdsh','xZ N eCrnN','VLP RpAbBI',3);
INSERT INTO "companies" VALUES(12,'XUyj Upsgp','nxPZojhehT','uY To aJ','MFeFizWvGB','SlGMhuF XW',3);
INSERT INTO "companies" VALUES(13,'SAtkPCknOk','lhe z RVr','WYUoHrYUif','RID sOtI','pwJSo siMi',3);
INSERT INTO "companies" VALUES(14,'vLLPGaojz','GtqGoIc vp','Jn LDDzGrf','lFno voB Z','NWaxsnaxMt',3);
INSERT INTO "companies" VALUES(15,'meNd XR vk','Bi H FIg v','iKv qHvAKj','zZsh Xrp g','obspG jCew',3);
INSERT INTO "companies" VALUES(16,'Jf wZdPquA','ibvrxTSpJ','CLnILBlsFP','kR kfdXREZ','fXoqr sCw',3);
INSERT INTO "companies" VALUES(17,'HksIMLaPUz','Vrivk qt q','udTJCI ksQ','v O eB sfg','ulimEm XBN',3);
INSERT INTO "companies" VALUES(18,'Mnln VAnw','AXHre nUKp','NfKZxEZzZx','UWBDvpytgK','RUb H Gszo',3);
INSERT INTO "companies" VALUES(19,'xDDTH bgY','v gzvsGLRv','YUiKAHeJI','r OhCXX kL','VuQPFl fjV',3);
INSERT INTO "companies" VALUES(20,'CzmlBjJfBB','iYEp RW xd','fWFSuK Tu','m rwZSnq','a v UN wE',3);
INSERT INTO "companies" VALUES(21,'mTVfxmt z','cvs CPsmFC','cCVkNc dme','Yamvrl Dt','SxmgagpGyF',3);
INSERT INTO "companies" VALUES(22,'rJxVhyhJT','Ls OcLhalp','NHcHhtkZZd','UyLz C cP','helDZpCRrI',3);
INSERT INTO "companies" VALUES(23,'qqjYFDfnRa','OadfsSyV z','svXIRHyupI','Lq mkpvc t','KoFaFIbO N',3);
INSERT INTO "companies" VALUES(24,'uF QscNB K','Tv QUAGrgk','TR vK RVF','sVGeoKXZEy','uMmVYteuu',3);
INSERT INTO "companies" VALUES(25,'KAAdJ YWUy','pNiKVtbK','NKtVXIGQS','PCWP dmiY','wmwCgWXnbO',3);
INSERT INTO "companies" VALUES(26,'prLArRIFrY','xWaJQrPQHV','ZJiTSBfFCO','JJ BY wjqO','jrfHrmzH O',3);
INSERT INTO "companies" VALUES(27,'K BdzHsUnW','pwXPaUpglK','jMxYuZYif','n qYwJjgOR','OycuCiNhHX',3);
INSERT INTO "companies" VALUES(28,'fbVNq qGzb','xwbD k qr','dCzDjEWoxE','tKpQgHJvrV','j iet rlEn',3);
INSERT INTO "companies" VALUES(29,'DDcSxROsnV','qkOmyBiUQF','bMVPSKnMSQ','BUmC tGDA','onVN SBwnK',3);
INSERT INTO "companies" VALUES(30,'qrSMRNTgkc','wcCEdRNqvK','sIEFsM v i','h DVP knfQ','mweeeOBP y',3);
INSERT INTO "companies" VALUES(31,'SHZafXwHyZ','gsriLsnUhi','OloevKZnTn','dffnMZbBdn','Uanyl fm O',3);
INSERT INTO "companies" VALUES(32,'DcCLVpuahC','CiJ GxiWSk','gUXSKNFjqj','KakNpDizi','eSf HPJMRd',3);
INSERT INTO "companies" VALUES(33,'v IE PC','UpKEuHbHLw','G ZxnA jOD','DIRuWtRzrD','cfCSmeiCl',3);
INSERT INTO "companies" VALUES(34,'foQojuNtu','rlmtLgwbqw','TV cQOd t','VNGL CtbA','RddlIKgRcY',3);
INSERT INTO "companies" VALUES(35,'nhmuWUgzCw','BVooFQusAb','gZYaHnGgy','UAnq t LWH','vIINfmpTb',3);
INSERT INTO "companies" VALUES(36,'MVw NaOPbr','ja FWBNIfe','CEOFc mu','YuPcbXXUiP','GoyF LzRTJ',3);
INSERT INTO "companies" VALUES(37,'XcYFNhCmFf','YHBdgqwWoL','BF mD F p','FQwiMfeMb','ScmavkdyVS',3);
INSERT INTO "companies" VALUES(38,'OnJVspDlJf','dwJPlqmfHR','uSW GhLCJp','JrMDwSdcyA','wjdxmedvtX',3);
INSERT INTO "companies" VALUES(39,'mOWSJ xya','RYSqy SCFn','EXUlaRQKUC','pq BSXJSQT','ujFV ZWpE',3);
INSERT INTO "companies" VALUES(40,'PXpEmOlSIO','ouLy ukUG','xLHvnRJsKG','hKBifcsxws','ilwFeikIUe',3);
INSERT INTO "companies" VALUES(41,'M aSxwwMZT','CBdpVnLXGp','PdGk pQwWq','TTUZxGP Ih','LxmspqYuRH',3);
INSERT INTO "companies" VALUES(42,'rzFEyxUQRo','GWDACKT vt','uMPI vctpn','XkNlWEZleP','bWizOiRLAb',3);
INSERT INTO "companies" VALUES(43,'fnqaDB HAI','YGWpFx XIn','WNDT wRiX','VvsGdxhXwO','LLljFGgEUH',3);
INSERT INTO "companies" VALUES(44,'thjlMRLQIR','YwMDDVxE X','Sw FNwb UR','yKBHr IG','AGHKctiYsC',3);
INSERT INTO "companies" VALUES(45,'qYZJcsJAIG','JwJ Sg kE','VDt wEIKA','fzKMIrmdhh','TNsDtYCWgk',3);
INSERT INTO "companies" VALUES(46,'jcSQ kHxBy','C EVlHCvF','YqqbCU b d','pzmQ pRwTV','qwGnxhBqZZ',3);
INSERT INTO "companies" VALUES(47,'GUrtUczLpe','wRC Zm FS','BanQMke nk','siTw BaICK','dyoTnEJgvM',3);
INSERT INTO "companies" VALUES(48,'Nuohv cTCO','pYGGNw uz','vgDLXLtxtA','rqRujqWqO','spBGPkveX',3);
INSERT INTO "companies" VALUES(49,'ZLdldkKoV','nm WvkdCWw','KLmRLZU VS','ya f rPR I','y BmVDXwj',3);
INSERT INTO "companies" VALUES(50,'fcGhHXcuDP','xoUri ozZj','rtVpHBQzEn','DMqSA RDip','EYZChOFkFG',3);
INSERT INTO "companies" VALUES(51,'zzWWJCRcyM','LkiAIWfOQr','oFIstiPI','kQ vQZLoTp','irvcnGanlI',3);
INSERT INTO "companies" VALUES(52,'dPMZmHWA b','yKMmmVzsfn','v ZaAAdI u','vB va yWm','W oGbqDOs',3);
INSERT INTO "companies" VALUES(53,'ZEmzGb bfH','BOdK vSwWO','NyCkTCjtPn','qRUyeuzkEf','cEAwTdMggf',3);
INSERT INTO "companies" VALUES(54,'j JRQifmkq','QUGfMFjE U','tbm F Yg','ONvMUnLrb','dZ pVxgeU',3);
INSERT INTO "companies" VALUES(55,'yAb TYnZdv','k E RTxXUJ','Z smcKOXs','vVhVPOJAJm','ICTnRPdIUo',3);
INSERT INTO "companies" VALUES(56,'nGIqlBJ Jj','LzAb fg yr','g LLQWltiW','i JWSeTKDD','YhLeaUhRv',3);
INSERT INTO "companies" VALUES(57,'CYmVDHMgDW','qX LKIkVWY','OgeS PT','GKbPWt yXY','g yFOD und',3);
INSERT INTO "companies" VALUES(58,'WFKDELx vh','Z R sy Ss','GgIDgxjyE','T WsvIu gz','UIVL qdTI',3);
INSERT INTO "companies" VALUES(59,'K H CRVDq','RSmL nWQbL','QwgNMJUlg','B vyjMPp B','EHvBDfrMN',3);
INSERT INTO "companies" VALUES(60,'bOH JrbAAW','z KjMVJT I','WV wfnQPet','RuLfSI sgD','Z seWzJ k',3);
INSERT INTO "companies" VALUES(61,'DW EeElm','ZaFrMCezHw','cf RyQLJc','wdsr dp DR','CxISmWvSnL',3);
INSERT INTO "companies" VALUES(62,'ssGF stzjf','FdYHRjY Af','mMPMwbkKcj','QuqSQXfzIF','KMZGFtXVNa',3);
INSERT INTO "companies" VALUES(63,'fg vpFJdOU','fM x jnCuo','VF VJ W','AoYNAtUmDM','Yfy EKIBCE',3);
INSERT INTO "companies" VALUES(64,'t dx KtsL','bmi LYTACe','xBbAmF rSv','ZrZBS gWcS','hTKjcAOZRX',3);
INSERT INTO "companies" VALUES(65,'gDvUn OJnB','CPZjfz vXP','mSEMXJfiN','KcwkYvPwRw','WSb zzLfzN',3);
INSERT INTO "companies" VALUES(66,'EiRFwS cZ','KEPNv ZMb','eFvsE RHA','QCoUrcpIYf','XB PzOHnWs',3);
INSERT INTO "companies" VALUES(67,'SQkkv knmx','doxVfs Bio','AzK HwrLaY','d oCsoU B','LOxtb hgsR',3);
INSERT INTO "companies" VALUES(68,'byFsn xOt','KS ZSAcV a','M QFJa ODt','UJNJYQfAPg','wR bnXBLiY',3);
INSERT INTO "companies" VALUES(69,'gYOgeQ r','vDQGGqvlT','QWeSkJFfzE','nGGyhSrbk','N om REpTd',3);
INSERT INTO "companies" VALUES(70,'cbIl EvXOH','UOKixzsSKS','h sWgIOXXO','YyVgfuA Eu','zCtnnSX Qh',3);
INSERT INTO "companies" VALUES(71,'SlQavGnIqy','dmGGzX Lr','hJCl OL LZ','ipA wlhWdb','uJWwCySo s',3);
INSERT INTO "companies" VALUES(72,'aJsAensG q','BGfJQIzitm','hULbJbQkHi','k yxFwRCet','UwRdzKqqWO',3);
INSERT INTO "companies" VALUES(73,'lbSqZtq nW','pRklt AUfn','DVnm JGlwD','IchFDSDmJf','CdJpmvE il',3);
INSERT INTO "companies" VALUES(74,'ksOdoGKXud','El ZMgZROD','T teBPN','F wbwtFES','NnisIzvLWF',3);
INSERT INTO "companies" VALUES(75,'JVjShkt Y','kwFVuqvm','zLI FNyS','MVJFuh VKG','qhvb chRPn',3);
INSERT INTO "companies" VALUES(76,'AXOIZa Ozx','VtZz PHkPk','OfLAqcJVlF','ceNBTdBuug','DqhvlVBBjH',3);
INSERT INTO "companies" VALUES(77,'gRd GkEXkF','sREIYiISzy','PSynBS X l','luoXVpEjiD','ZGNAXMxDTn',3);
INSERT INTO "companies" VALUES(78,'SMqhaXvvfp','xDLWandljX','TXGlHeo H','eUFXQFkXn','ulcmbwXkBq',3);
INSERT INTO "companies" VALUES(79,'FiqaFhC PX','WvZuHyOcYO','FLcTkXRyhm','B bSTCOaZ','HwIwDlogcO',3);
INSERT INTO "companies" VALUES(80,'CKZz FtL m','D ollUIhIK','hefFU jIKr','wzsiR kDK','UV UUgH cX',3);
INSERT INTO "companies" VALUES(81,'NpcRtDINbr','Gcx kQGAq','PGAUThm Mm','HKhwwMrqTR','EeE b G f',3);
INSERT INTO "companies" VALUES(82,'EpVndTkUno','Mo IpcOFx','BZZHipjnuz','WvPJTNdGK','ufYtuJAxWC',3);
INSERT INTO "companies" VALUES(83,'ppWIIv qlQ','EmwdwpHPLU','osllAe QL','ZeAryN KkR','Ju zexwV',3);
INSERT INTO "companies" VALUES(84,'G VfByTSxu','vzVKQnhJGL','PcTVmfhUEx','qEpVLVGSYs','oYfFZSxCS',3);
INSERT INTO "companies" VALUES(85,'gJUznAttDa','qBbPhUCHz','yztsjj uQR','h xF Hpp T','NGOHUZchec',3);
INSERT INTO "companies" VALUES(86,'twotDFlpHb','mywtDXGNOC','uPsLhOtSqo','OPUoZJpukY','cF TnxIfwl',3);
INSERT INTO "companies" VALUES(87,'xumHzscOG','Hr UASOJkI','mDgZzwksEE','binpndG Tz','V LWfHfbI',3);
INSERT INTO "companies" VALUES(88,'tT mUYeFLz','zbvjpRzHQF','Ldgnnz pTU','Ejst E TST','oWsfmjKRhX',3);
INSERT INTO "companies" VALUES(89,'TlIfe paRD','mUoWfzB xm','YHL J VP Y','V hj hsjR','OFPpOsbOGW',3);
INSERT INTO "companies" VALUES(90,'DNefcg Bmc','zguzSGMIgP','RGuxLlCoGM','OfpgzDJ pZ','VAmMNAFfNY',3);
INSERT INTO "companies" VALUES(91,'XvddfNHMmr','z WqCyutO','klcaDUMSA','ZuW jrCi T','KEjnBjzDSK',3);
INSERT INTO "companies" VALUES(92,'NOHEpBIkF','vXgv vRGVZ','qInAMQOKiD','NVMxJWEnvX','IPgu yAstk',3);
INSERT INTO "companies" VALUES(93,'fiEACqX WG','HtpflFBhtF','AJ FCfLWgp','lFCuDszMqP','oSy YxPjJB',3);
INSERT INTO "companies" VALUES(94,'MKuqdR ken','G NKfgDDZQ','OPum zDCnd','fYVErrcoNf','BeN y RjR',3);
INSERT INTO "companies" VALUES(95,'hVcttSQhZf','CkelQ ZPWX','yDEaCfIPOi','juLHQ lizN','P rnnyynJM',3);
INSERT INTO "companies" VALUES(96,'CVqSqJgEJ','cPwonlfjqo','SclWOlpihO','JgFIiY cmR','hAVPet jQC',3);
INSERT INTO "companies" VALUES(97,'cGRGWWUqql','HQBPhxshil','krDx izDX','LoleyaTDIR','qVHl FUk',3);
INSERT INTO "companies" VALUES(98,'gqdcDKzbKG','qIoxMcWFn','EJXRPyHE B','kHtETQQN','jpROZs J F',3);
INSERT INTO "companies" VALUES(99,'D zv e F','uNpqgECOux','xNoSlJfQVM','dupMqRrQ q','LPAkwDEQTU',3);
INSERT INTO "companies" VALUES(100,'b AGDyQ','tjcmpwkUBs','oJsALvJMZZ','uU yvSuwX','PwsRMHYsNd',3);
INSERT INTO "companies" VALUES(101,'qJcR XjPvg','d JFqeKacv','VJpHZ eTdy','h fjdOFZTZ','fDdifTVgd',3);
INSERT INTO "companies" VALUES(102,'vsVWbkMVHS','R s gVKTE','DnSpVy IDV','ddIKonbhpM','hxfvLGHYFo',3);
INSERT INTO "companies" VALUES(103,'gQpyM s cK','DhugMrq Ex','UWR cnLTdW','EMFFQoaFxC','HJ Y xDN',3);
INSERT INTO "companies" VALUES(104,'NVhdDvbmZC','FpsF ZIqO','bAHqNX dtB','fyzeYt gki','UDZUGxisG',3);
INSERT INTO "companies" VALUES(105,'HRojXvWetZ','ZZRxZ GDng','PM iVYD Ao','oVpYQetSGi','bwHLtQxjC',3);
INSERT INTO "companies" VALUES(106,'QZDcv xch','HOEriGR qG','jQPjzsCqg','v c TvYMKz','RQQrEFNguX',3);
INSERT INTO "companies" VALUES(107,'VU kzBGCQt','nVHYiSzaME','B W CyOxFt','FEeGAWoEvr','iBJ inqkx',3);
INSERT INTO "companies" VALUES(108,'VSeJMZBWHK','psAl NiFwY','ROxicjgG','Rx Dl lzW','nunBtFBPDp',3);
INSERT INTO "companies" VALUES(109,'Kq nKxgMtb','OqUzzBUJvi','HMyrHhvuAj','XpEzsHqyVQ','fVD dUSnCM',3);
INSERT INTO "companies" VALUES(110,'EeKYAGOOiY','YySvCOIcfE','TiNk JHm I','BIAMSv Co','Lgq soybXh',3);
INSERT INTO "companies" VALUES(111,'Ug APPqRs','OsZtrt q Y','MTWfWiLHjL','ogD l IJG','mrQCQsy f',3);
INSERT INTO "companies" VALUES(112,'rAqVcylWPJ','dZx ZUMJBr','RDbIMluh n','Vx GddOod','hMmljyTznd',3);
INSERT INTO "companies" VALUES(113,'MsqVIaPOVF','jzKfZ IEY','JbnVHu rCv','uG CfyLM G','cSD tbunVf',3);
INSERT INTO "companies" VALUES(114,'HE O shU','LXkWhqH op','ScbyDuHek','IjHuvwppdc','v ANnXVXJ',3);
INSERT INTO "companies" VALUES(115,'OTdxjIbLms','GkSS gjZnD','YYZtZlaBbg','XuBVIJAiz','Kqyh GCWN',3);
INSERT INTO "companies" VALUES(116,'BHnYKPFI','ayfhtreAM','vcrTdAdagO','mFXsrvAjtk','UrlgIJavUp',3);
INSERT INTO "companies" VALUES(117,'y Mo QSqqe','v CPS Pe l','QuVrBXVfNE','I JgGZqSjt','PnJktuAfWd',3);
INSERT INTO "companies" VALUES(118,'BVSqEaXNIY','zWzksmcSxM','sxnVCtzIo','ZUPrdaHQp','pPupbOiC d',3);
INSERT INTO "companies" VALUES(119,'JvDQcqby l','FNL gPGb u','syuYqvEndG','kZSBbFQhJU','fw X xRcss',3);
INSERT INTO "companies" VALUES(120,'m zqi taf','sAxV gpoSz','GoVNygMFpB','d VAjzF VE','ErjghBQLhm',3);
INSERT INTO "companies" VALUES(121,'JdFPWyJmQf','gn KBs yc','GMs Sd mgB','AyOocwe i','uvlkRDh Qx',3);
INSERT INTO "companies" VALUES(122,'o INevLYKI','wOslxTjKLJ','JXdlESV GL','QeSgQbUsNm','OqyJua Suh',3);
INSERT INTO "companies" VALUES(123,'xkv gM Ud','GHMxCoELNi','XQjbxKJdzw','HwYnju yGq','fj wt cBVV',3);
INSERT INTO "companies" VALUES(124,'P JEUkTTPu','tQXdDEtkHw','t fs WCW x','aiIU WVXWG','UvpTwVPEmj',3);
INSERT INTO "companies" VALUES(125,'IhFfnZU mU','m XInFvC O','VlXd IyPmT','KHGcUPbtsa','X rDtuZOBk',3);
INSERT INTO "companies" VALUES(126,'CKVCGd KB','oaZh dybMf','EoW o yeLf','Ssiv GPmME','zUAPFNUqRp',3);
INSERT INTO "companies" VALUES(127,'cwKSJePqvg','nzyF DDOmq','ytQZqGMTPa','HnWkFTxMQS','svm vOULdz',3);
INSERT INTO "companies" VALUES(128,'VAXAMX ksj','mawdbLNU','qwydnPLExj','OZT OJBaoL','GxLxyw FB',3);
INSERT INTO "companies" VALUES(129,'xrN eJJxEN','XsT CqQDf','KGGsorsjyc','FAedKnl rQ','Csnydo tLO',3);
INSERT INTO "companies" VALUES(130,'ms nJgTdRW','jNQqmWGhaT','IgDSHVDMgr','WTFKrnKbXH','msT cLSVme',3);
INSERT INTO "companies" VALUES(131,'hTLiBCn lh','LhPUHpeVSs','MSjIDBwac','xsblZ TlvS','fNN qPzVJ',3);
INSERT INTO "companies" VALUES(132,'wJlosmau d','HlvDANVhcc','IAWqYdY O','XHZUd Hdqu','CBbGbrvfHg',3);
INSERT INTO "companies" VALUES(133,'hVWFGljUye','HKVxesZYee','vHvMrMUKgh','lQ BkQvPTq','AKlwkClfga',3);
INSERT INTO "companies" VALUES(134,'vhUzS yjEn','ebPbV GExI','rpCmeQfEIl','eZXUckcvCh','LWe OkBZL',3);
INSERT INTO "companies" VALUES(135,'ZYQ ZPXeXr','iPFCr Wemz','XTgMy bCz','ZvgSyGMw','aUzdvWJdON',3);
INSERT INTO "companies" VALUES(136,'BxJddwgvuf','YMcvSINnmf','eyX Rq QAU','Bdw hYJHY','Usp MfPbWi',3);
INSERT INTO "companies" VALUES(137,'swCHvhLEz','xzEDMtTqBZ','qsoKFOCUfc','LIHGuKodgu','lBUqgGHHnP',3);
INSERT INTO "companies" VALUES(138,'mHc lPTnd','QUdD P vUK','XlEoPU Q','qveYITA TS','MZzXW LbPT',3);
INSERT INTO "companies" VALUES(139,'vEpEOWec n','kKAN XqQ p','O XZSG clG','TrDfZKhXPf','pAt bFzkQK',3);
INSERT INTO "companies" VALUES(140,'XOBAmBDpD','v ICPa Gm','aHTzc Vc','o BFXb eIG','UlRRgyhELz',3);
INSERT INTO "companies" VALUES(141,'QiEQVkGYAF','FfRNrGKIsl','lGEpUimtZQ','f jS VIJm','OQZYdmWjg',3);
INSERT INTO "companies" VALUES(142,'g FeGCcdv','RBrzXBM ob','fLadX HCMy','OsQeT Clpa','fRUP n BR',3);
INSERT INTO "companies" VALUES(143,'sp uI eTsU','mTbNfAuOHq','dPHNGDOdvP','BjqTv QoEy','js IAG Cz',3);
INSERT INTO "companies" VALUES(144,'HmmeCgVxNt','rSQH Xm rP','Qp bngi vX','cH ZxYvGWF','IaHU baj',3);
INSERT INTO "companies" VALUES(145,'O UXApC LM','GG v nICJH','fT qxFOHEn','exaJMcowsv','otgIOWRzbb',3);
INSERT INTO "companies" VALUES(146,'c CJSsLNyM','YCPcj xiIL','RTIHA Rx h','BmUAPSss','laVg lkcdT',3);
INSERT INTO "companies" VALUES(147,'LCeKScY RO','KWCUUvzmcs','Ix NKzFu h','alF pqmrQW','kwcQRLB hi',3);
INSERT INTO "companies" VALUES(148,'NJtYjKMGlW','kmJFfocSoG','C nyOVSCpF','Gcn wX Va','ZHPBiOMXgQ',3);
INSERT INTO "companies" VALUES(149,'XyO yRAgK','eEVhQpckXY','apTheNJYJV','Pt dIrOCof','OEQFsEptwN',3);
INSERT INTO "companies" VALUES(150,'Kl gVjCzP','LOWPQkjULS','EoERfqPPxQ','KRjh yADgp','SDCsP owkZ',3);
INSERT INTO "companies" VALUES(151,'aTSIlNWZuC','GjYGxtiEaj','vyi BvBMqT','zGF bAEtc','ppWhErjxMS',3);
INSERT INTO "companies" VALUES(152,'m EXMlZXpg','EaFooUNKnz','rf DiI SLT','xlpDhISIrj','RyO q K pa',3);
INSERT INTO "companies" VALUES(153,'aDDodBvjsO','TNWVr fVHD','WQw CKlHVp','zJlbDIokHm','yKAUvNeV E',3);
INSERT INTO "companies" VALUES(154,'h ew wuL','fJQZYOqMJ','AcIDgKLXol','XwPjnjVvG','qmIQcGmlkW',3);
INSERT INTO "companies" VALUES(155,'YIFyYYGXFB','YxlUAmpnH','TuqnCFbDQ','OV VsA Pkd','UwkeTSIWLc',3);
INSERT INTO "companies" VALUES(156,'iIWcEWkHLt','AnnTK lnmy','IHAXWbGhlR','HQNyNVm','aTYZ vodAJ',3);
INSERT INTO "companies" VALUES(157,'D FzSn Oxv','Oas Ehvhgt','YID EHffJB','uIC otoyML','UcHlGVEYzM',3);
INSERT INTO "companies" VALUES(158,'aeO QNkce','HN C OvH f','acow Ezwo','rmOxloEDDj','CnzzECxKPq',3);
INSERT INTO "companies" VALUES(159,'jxsPGgmkxF','cYmA di o','scj r n yo','qsIpezxTYb','H pOMJmpll',3);
INSERT INTO "companies" VALUES(160,'ZJSPk BxCV','fFIP uwqKN','WdIJdCKAkr','DRfKYnny','HIn MqnkUV',3);
INSERT INTO "companies" VALUES(161,'QbryYTLEhb','D wbLlOZjV','Fcg NmuoHs','fSJxMhkspU','llfzNrEaAx',3);
INSERT INTO "companies" VALUES(162,'TjFPXGpH Y','dJ f xuyGn','mO b uUjLW','w aMws ghP','axsChh bKs',3);
INSERT INTO "companies" VALUES(163,'m wDbMzyh','RoREJ kqqO','Drar ZLbx','woPSD JmS','Cy EYmPt',3);
INSERT INTO "companies" VALUES(164,'SbevfKiB M','MwEHO xua','KS avGWAUb','lgcGFytX E','rtf gmBxPP',3);
INSERT INTO "companies" VALUES(165,'NjTfLOIxXd','XSufjklLaU','ZOrzkXm vV','tXAkyt PV','uYODsCYpvY',3);
INSERT INTO "companies" VALUES(166,'SOJYlchRLm','mhbaHgYZWu','ymsoTYy x','u a SLpd','Kx JNBXgP',3);
INSERT INTO "companies" VALUES(167,'P xaYod dq','K sJLqo n','NbUCWhqWzH','tcAm Rs pK','aAxZPl nI',3);
INSERT INTO "companies" VALUES(168,'YSfQpMEdbk','s BKm iZvU','tnDtI wsIH','ZKIRwoeHph','ZJK jsAkS',3);
INSERT INTO "companies" VALUES(169,'EimCKWhPGl','goW pFC z','BIQG D vo','IlUd EGOlo','MQhz UdOrJ',3);
INSERT INTO "companies" VALUES(170,'nnZwiQMBYN','GG XWMdk q','W VQozgzYE','ghe jsMJ E','CvwyF HbC',3);
INSERT INTO "companies" VALUES(171,'BKxIHywyHn','bfNOqVlHVW','VfiErKERWn','X k vpGQT','jIAmwtoeiy',3);
INSERT INTO "companies" VALUES(172,'YgUCfZMHNK','QYXNuRHZdT','FejWfKkQbR','FknXUSxnGa','SixBxd voo',3);
INSERT INTO "companies" VALUES(173,'iwGdl n eW','od jnvDBz','PpU Naf zM','W UddT hqp','pi IgcSXqD',3);
INSERT INTO "companies" VALUES(174,'tIpQ Wvx t','bTF wyoloI','NKog S kPd','n jYgjwcmG','SQsEOURDhv',3);
INSERT INTO "companies" VALUES(175,'qKLnERqpH','OLmSxp Tje','CgYCZrX','GFKDnp LZU','SLgSBR mEZ',3);
INSERT INTO "companies" VALUES(176,'IKEA','Sveavägen','uploads/Exjobbsförslag_old.pdf','uploads/Exjobbsförslag.pdf','ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd',6);
INSERT INTO "companies" VALUES(177,'','','uploads/','uploads/','','none');
INSERT INTO "companies" VALUES(178,'asdasd','asdasd','uploads/Blue_mosque-Istanbul.jpg','uploads/Favorite_icon.svg','asdasdasda',5);
INSERT INTO "companies" VALUES(179,'asdasd','asdasd','uploads/Blue_mosque-Istanbul.jpg','uploads/Favorite_icon.svg','asdasdasda',5);
INSERT INTO "companies" VALUES(180,'sdas','adas','uploads/Blue_mosque-Istanbul.jpg','uploads/like.png','asdasdadas',2);
INSERT INTO "companies" VALUES(181,'sdfsf','sdfsdf','uploads/Blue_mosque-Istanbul.jpg','uploads/background.png','sdfsfsdfsdf',1);
INSERT INTO "companies" VALUES(182,'asdasd','asdasd','uploads/background.png','uploads/google1.jpg','asdasdadsd',3);
INSERT INTO "companies" VALUES(183,'sfdfsdf','sdfsdfs','uploads/Favorite_icon.svg','uploads/hover.png','sdfsdfsdfsdf',3);
INSERT INTO "companies" VALUES(184,'asdas','asdasd','uploads/Blue_mosque-Istanbul.jpg','uploads/Blue_mosque-Istanbul.jpg','asdasasdasda
a
sd
ad
as
das
da
d',6);
INSERT INTO "companies" VALUES(185,'2356246246dhgfg','2342345624626gfdghfdh','uploads/Blue_mosque-Istanbul.jpg','uploads/hover.png','sg 454t54 ',3);
INSERT INTO "companies" VALUES(186,'gh','fgh','uploads/Favorite_icon.svg','uploads/Magnifying_Glass.png','fhf','none');
INSERT INTO "companies" VALUES(187,'sdfsf','sdfsd','uploads/Blue_mosque-Istanbul.jpg','uploads/Green_Checkmark.jpg','sdfsdfsf',5);
INSERT INTO "companies" VALUES(188,'sfsdf','sdfsdf','uploads/hover.png','uploads/Magnifying_Glass.png','sdfsdf',5);
INSERT INTO "companies" VALUES(189,'sdfsdfsd','sdfsdf','uploads/Green_Checkmark.jpg','uploads/Magnifying_Glass.png','sdfsdfsdf',5);
INSERT INTO "companies" VALUES(190,'sdfsdfsd','sdfsdf','uploads/Green_Checkmark.jpg','uploads/Magnifying_Glass.png','sdfsdfsdf',5);
INSERT INTO "companies" VALUES(191,'sdfdsf','sdfsdf','uploads/background.png','uploads/close.png','sdfsdfsdfsdf
sdf
sdfsdf
sdfsdfsd
',4);
INSERT INTO "companies" VALUES(192,'sdfdsf','sdfsdf','uploads/background.png','uploads/close.png','sdfsdfsdfsdf
sdf
sdfsdf
sdfsdfsd
',4);
INSERT INTO "companies" VALUES(193,'fsfdsfsd','sdfsdfsd','uploads/google1.jpg','uploads/like.png','sdfsdfsdfsdf
sdfsdf
sdfsdf
',2);
INSERT INTO "companies" VALUES(194,'dfdsf','sdfsdf','uploads/background.png','uploads/hover.png','sdfsdfsdfsdf
sdfsdfsdfs
fsdfsdfsdf
',5);
INSERT INTO "companies" VALUES(195,'werwer','werwe','uploads/Favorite_icon.svg','uploads/jobdata_bg.jpg','wrwerwe',5);
INSERT INTO "companies" VALUES(196,'werwer2342','ewrwe','uploads/hover.png','uploads/close.png','234242342',6);
INSERT INTO "companies" VALUES(197,'2342346gg','43v463463g','uploads/Blue_mosque-Istanbul.jpg','uploads/jobdata_bg.jpg','g363634g',4);
INSERT INTO "companies" VALUES(198,'345345g 4b53b54by6','4b456547','uploads/Favorite_icon.svg','uploads/Green_Checkmark.jpg','b457457',2);
INSERT INTO "companies" VALUES(199,'fgebyebsbyesyseyb','sbysbeybby','uploads/Favorite_icon.svg','uploads/hover.png','sberybseybse',3);
INSERT INTO "companies" VALUES(200,'fgebyebsbyesyseyb','sbysbeybby','uploads/Favorite_icon.svg','uploads/hover.png','sberybseybse',3);
INSERT INTO "companies" VALUES(201,'fgebyebsbyesyseyb','sbysbeybby','uploads/Favorite_icon.svg','uploads/hover.png','sberybseybse',3);
INSERT INTO "companies" VALUES(202,'rtert','bbetetbe','uploads/Green_Checkmark.jpg','uploads/Green_Checkmark.jpg','ebterbt',4);
INSERT INTO "companies" VALUES(203,'rtert','bbetetbe','uploads/Green_Checkmark.jpg','uploads/Green_Checkmark.jpg','ebterbt',4);
INSERT INTO "companies" VALUES(204,'rtert','bbetetbe','uploads/Green_Checkmark.jpg','uploads/Green_Checkmark.jpg','ebterbt',4);
INSERT INTO "companies" VALUES(205,'rtert','bbetetbe','uploads/Green_Checkmark.jpg','uploads/Green_Checkmark.jpg','ebterbt',4);
CREATE TABLE contacts (
id integer primary key autoincrement not null,
firstname TEXT,
lastname TEXT,
tel text,
email text,
companyid integer not null,
foreign key (companyid) references companies(id));
CREATE TABLE Companystats (
 cpyid integer not null,
 nlikes integer default 0,
 nclicks integer default 0,
 foreign key (cpyid) references companies(id));
INSERT INTO "Companystats" VALUES(4,1,36);
DELETE FROM sqlite_sequence;
INSERT INTO "sqlite_sequence" VALUES('Users',1);
INSERT INTO "sqlite_sequence" VALUES('Categories',7);
INSERT INTO "sqlite_sequence" VALUES('companies',205);
COMMIT;
