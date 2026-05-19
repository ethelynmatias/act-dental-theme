{ pkgs }: {
  deps = [
    (pkgs.php83.withExtensions ({ enabled, all }: enabled ++ [
      all.pdo_sqlite
      all.mbstring
      all.tokenizer
      all.xml
      all.curl
      all.zip
      all.fileinfo
      all.openssl
    ]))
    pkgs.php83Packages.composer
    pkgs.nodejs_20
    pkgs.sqlite
  ];
}
