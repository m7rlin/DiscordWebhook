<?php

/**
 * Discord Embed is a part of DiscordWebhook library.
 */
final class DiscordEmbed
{
  protected $title;
  protected $type = "rich";
  protected $description;
  protected $url;
  protected $timestamp;
  protected $color;
  protected $footer;
  protected $image;
  protected $thumbnail;
  protected $video;
  protected $provider;
  protected $author;
  protected $fields;

  /**
   * Set the title and the url
   *
   * @param string $title
   * @param string $url
   * @return self|null
   */
  function setTitle($title, $url = "") {
    $this->title = $title;
    $this->url = $url;

    return $this;
  }

  /**
   * Set description
   *
   * @param string $description
   * @return self
   */
  function setDescription($description) {
    $this->description = $description;

    return $this;
  }
  /**
   * Set timestamp of the embed
   *
   * @param [type] $timestamp
   * @return self
   */
  function setTimestamp($timestamp) {
    $this->timestamp = $timestamp;

    return $this;
  }
  /**
   * Set border color
   *
   * @param string $color
   * @return self
   */
  function setColor($color) {
    $this->color = is_int($color) ? $color : hexdec($color);

    return $this;
  }
  /**
   * Set url
   *
   * @param string $url
   * @return self
   */
  function setUrl($url) {
    $this->url = $url;

    return $this;
  }
  /**
   * Set footer
   *
   * @param string $text
   * @param string $icon_url
   * @return self
   */
  function setFooter($text, $icon_url = "") {
    $this->footer = [
      "text" => $text,
      "icon_url" => $icon_url,
    ];

    return $this;
  }
  /**
   * Set image
   *
   * @param string $url
   * @return self
   */
  function setImage($url) {
    $this->image = [
      "url" => $url,
    ];

    return $this;
  }
  /**
   * Set thumbnail
   *
   * @param string $url
   * @return self
   */
  function setThumbnail($url) {
    $this->thumbnail = [
      "url" => $url,
    ];

    return $this;
  }
  /**
   * Set author
   *
   * @param string $name
   * @param string $url
   * @param string $icon_url
   * @return self
   */
  function setAuthor($name, $url = "", $icon_url = "") {
    $this->author = [
      "name" => $name,
      "url" => $url,
      "icon_url" => $icon_url,
    ];

    return $this;
  }
  /**
   * Set field
   *
   * @param string $name
   * @param string $value
   * @param boolean $inline
   * @return self
   */
  function setField($name, $value = "", $inline = false) {
    $this->fields[] = [
      'name' => $name,
      'value' => $value,
      'inline' => boolval($inline),
    ];

    return $this;
  }
  /**
   * Get fields as an array
   *
   * @return array
   */
  function toArray() {
    return [
      'title' => $this->title,
      'type' => $this->type,
      'description' => $this->description,
      'url' => $this->url,
      'color' => $this->color,
      'footer' => $this->footer,
      'image' => $this->image,
      'thumbnail' => $this->thumbnail,
      'timestamp' => $this->timestamp,
      'author' => $this->author,
      'fields' => $this->fields
    ];
  }


}
 ?>