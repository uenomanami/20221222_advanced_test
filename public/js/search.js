  // テキストをトリミングする要素
  var selector = document.getElementsByClassName('search__opinion-table-opinion');
 
  // 制限する文字数
  var wordCount = 25;
 
  // 文末に追加したい文字
  var clamp = '…';
 
  for (var i = 0; i < selector.length; i++) {
    // 文字数を超えたら
    if (selector[i].innerText.length > wordCount) {
      var str = selector[i].innerText; // 文字数を取得
      str = str.substr(0, (wordCount - 1)); // 1文字削る
      selector[i].innerText = str + clamp; // 文末にテキストを足す
    }
  }

// const opinion = document.getElementById('search__opinion-table-opinion-mouseover');

// selector.addEventListener('mouseover', () => {
//   opinion.style.display = 'block';
//   opinion.style.backgroundcolor = 'white';
// });

// opinion.addEventListener('mouseleave', () => {
//   opinion.style.display = 'none';
//   selector.style.display = 'block';
// });

console.log('読み込みました');