[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Pocket/functions?utm_source=RapidAPIGitHub_PocketFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Pocket Package
Pocket was created to help people keep interesting articles, videos and much more from the web and enjoy them later. After saving to Pocket, the list of materials becomes available on any device - phone, tablet or computer. It can be viewed in queues, on the couch, on the way to work or on a journey - even offline.
* Domain: [getpocket.com](https://getpocket.com)
* Credentials: consumerKey

## How to get credentials: 
1. Register on the [getpocket.com](https://getpocket.com).
2. Create your Pocket Application in [console](https://getpocket.com/developer/apps/new).
3. After creation app, you will receive consumerKey.
 
## Pocket.getRequestToken
To begin the Pocket authorization process, your application must obtain a request token from our servers by making a POST request.

| Field      | Type       | Description
|------------|------------|----------
| consumerKey| credentials| The consumer key for your application.
| redirectUri| String     | The URL to be called when the authorization process has been completed.
| state      | String     | A string of metadata used by your app. This string will be returned in all subsequent authentication responses.

## Pocket.getAccessToken
Convert the request token into a Pocket access token. The Pocket access token is the user specific token that you will use to make further calls to the Pocket API.

| Field      | Type       | Description
|------------|------------|----------
| consumerKey| credentials| The consumer key for your application.
| code       | String     | The request token supplied in the code field of the getRequestToken endpoint.

## Pocket.createItem
To save an item to a user’s Pocket list, you’ll make a single request to the createItem endpoint.

| Field      | Type       | Description
|------------|------------|----------
| consumerKey| credentials| The consumer key for your application.
| accessToken| String     | The user's Pocket access token.
| url        | String     | The URL of the item you want to save.
| title      | String     | This can be included for cases where an item does not have a title, which is typical for image or PDF URLs. If Pocket detects a title from the content of the page, this parameter will be ignored.
| tags       | List       | A comma-separated array of tags to apply to the item.
| tweetId    | String     | If you are adding Pocket support to a Twitter client, please send along a reference to the tweet status id. This allows Pocket to show the original tweet alongside the article.

## Pocket.archiveItem
Move an item to the user's archive.

| Field      | Type       | Description
|------------|------------|----------
| consumerKey| credentials| The consumer key for your application.
| accessToken| String     | The user's Pocket access token.
| actions    | Array      | Array of actions.You can send one action or you can send dozens. The list of actions should be sent as a JSON array to vendor.
| actions.itemId    | Number     | The id of the item to perform the action on.
| actions.time    | DatePicker      | The time the action occurred.


## Pocket.unarchiveItem
Move an item from the user's archive back into their unread list.

| Field      | Type       | Description
|------------|------------|----------
| consumerKey| credentials| The consumer key for your application.
| accessToken| String     | The user's Pocket access token.
| actions    | Array      | Array of actions.You can send one action or you can send dozens. The list of actions should be sent as a JSON array to vendor.
| actions.itemId    | Number     | The id of the item to perform the action on.
| actions.time    | DatePicker      | The time the action occurred.

## Pocket.addFavoriteItem
Mark an item as a favorite.

| Field      | Type       | Description
|------------|------------|----------
| consumerKey| credentials| The consumer key for your application.
| accessToken| String     | The user's Pocket access token.
| actions    | Array      | Array of actions.You can send one action or you can send dozens. The list of actions should be sent as a JSON array to vendor.
| actions.itemId    | Number     | The id of the item to perform the action on.
| actions.time    | DatePicker      | The time the action occurred.

## Pocket.removeFavoriteItem
Remove an item from the user's favorites.

| Field      | Type       | Description
|------------|------------|----------
| consumerKey| credentials| The consumer key for your application.
| accessToken| String     | The user's Pocket access token.
| actions    | Array      | Array of actions.You can send one action or you can send dozens. The list of actions should be sent as a JSON array to vendor.
| actions.itemId    | Number     | The id of the item to perform the action on.
| actions.time    | DatePicker      | The time the action occurred.

## Pocket.deleteItem
Permanently remove an item from the user's account.

| Field      | Type       | Description
|------------|------------|----------
| consumerKey| credentials| The consumer key for your application.
| accessToken| String     | The user's Pocket access token.
| actions    | Array      | Array of actions.You can send one action or you can send dozens. The list of actions should be sent as a JSON array to vendor.
| actions.itemId    | Number     | The id of the item to perform the action on.
| actions.time    | DatePicker      | The time the action occurred.

## Pocket.addTagsToItem
Add one or more tags to an item.

| Field      | Type       | Description
|------------|------------|----------
| consumerKey| credentials| The consumer key for your application.
| accessToken| String     | The user's Pocket access token.
| actions    | Array      | Array of actions.You can send one action or you can send dozens. The list of actions should be sent as a JSON array to vendor.
| actions.tags    | String      | A comma-delimited list of one or more tags.
| actions.itemId    | Number      | The id of the item to perform the action on.
| actions.time    | DatePicker      | The time the action occurred.

## Pocket.removeTagsFromItem
Remove one or more tags from an item.

| Field      | Type       | Description
|------------|------------|----------
| consumerKey| credentials| The consumer key for your application.
| accessToken| String     | The user's Pocket access token.
| actions    | Array      | Array of actions.You can send one action or you can send dozens. The list of actions should be sent as a JSON array to vendor.
| actions.itemId    | Number      | The id of the item to perform the action on.
| actions.tags    | String      | A comma-delimited list of one or more tags.
| actions.time    | DatePicker      | The time the action occurred.

## Pocket.replaceTagsFromItem
Replace all of the tags for an item with the one or more provided tags.

| Field      | Type       | Description
|------------|------------|----------
| consumerKey| credentials| The consumer key for your application.
| accessToken| String     | The user's Pocket access token.
| actions    | Array      | Array of actions.You can send one action or you can send dozens. The list of actions should be sent as a JSON array to vendor.
| actions.itemId    | Number      | The id of the item to perform the action on.
| actions.tags    | String      | A comma-delimited list of one or more tags.
| actions.time    | DatePicker      | The time the action occurred.

## Pocket.removeAllTags
Remove all tags from an item.

| Field      | Type       | Description
|------------|------------|----------
| consumerKey| credentials| The consumer key for your application.
| accessToken| String     | The user's Pocket access token.
| actions    | Array      | Array of actions.You can send one action or you can send dozens. The list of actions should be sent as a JSON array to vendor.
| actions.itemId    | Number      | The id of the item to perform the action on.
| actions.time    | DatePicker      | The time the action occurred.

## Pocket.renameTag
Rename a tag. This affects all items with this tag.

| Field      | Type       | Description
|------------|------------|----------
| consumerKey| credentials| The consumer key for your application.
| accessToken| String     | The user's Pocket access token.
| actions    | Array      | Array of actions.You can send one action or you can send dozens. The list of actions should be sent as a JSON array to vendor.
| actions.newTag   | String      | The new tag name that will be added.
| actions.oldTag   | Number      | The tag name that will be replaced.
| actions.time    | DatePicker      | The time the action occurred.

## Pocket.getAllItems
o retrieve item(s) from a user’s Pocket list, you’ll make a request to the getAllItems endpoint.

| Field      | Type       | Description
|------------|------------|----------
| consumerKey| credentials| The consumer key for your application.
| accessToken| String     | The user's Pocket access token.
| state      | Select     | State type for request.
| favorite   | Select     | Select item type for request.
| tagType    |  String    | ```tag_name``` - only return items tagged with tag_name.```_untagged_``` - only return untagged items
| contentType| Select     | article - only return articles.video - only return videos or articles with embedded videos.image - only return images.
| sort       | Select     | newest - return items in order of newest to oldest;oldest - return items in order of oldest to newest;title - return items in order of title alphabetically;site - return items in order of url alphabetically;
| detailType | Select     | complete - return all data about each item, including tags, images, authors, videos, and more;simple - return basic information about each item, including title, url, status, and more;
| search     | String     | Only return items whose title or url contain the search string.
| domain     | String     | Only return items from a particular domain.
| since      | DatePicker | Only return items modified since the given since.
| count      | Number     | Only return items modified since the given since.
| offset     | Number     | Used only with count; start returning from offset position of results.

## Pocket.postMultipleActions
The postMultipleActions endpoint allows your application to send a single event or multiple events and actions that will modify the user's data in one call.

| Field      | Type       | Description
|------------|------------|----------
| consumerKey| credentials| The consumer key for your application.
| accessToken| String     | The user's Pocket access token.
| actions    | JSON       | JSON array of actions.You can send one action or you can send dozens. The list of actions should be sent as a JSON array to vendor.

