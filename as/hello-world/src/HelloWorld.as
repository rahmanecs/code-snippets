package {
    import flash.display.*;
    import flash.text.*;

    public class HelloWorld extends Sprite {
        public function HelloWorld() {
            var textField:TextField = new TextField();
            textField.text = "Hello, World!";
            addChild(textField);
        }
    }
}
