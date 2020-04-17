# wxCrawler
微信公众号文章标题封面获取
## 数据结构
```
{

    title: '【福利】免费领取一个月腾讯视频会员' // 标题
    digest: "【福利】免费领取一个月腾讯视频会员",   // 描述
    content_url: "",    // 内容天
    cover: "",  // 封面
    wechatname: "故事胶片",   // 名称
}
```
[项目原作者git](https://github.com/bigbignerd/WxCrawler)


## 使用方法

```
/**
* 微信公众号文章爬取类
* 使用方法：
* $crawler = new WxCrawler();
* $content = $crawler->crawByUrl($url);
*/
```