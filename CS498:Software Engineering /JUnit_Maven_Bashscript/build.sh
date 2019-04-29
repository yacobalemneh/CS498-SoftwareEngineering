echo 'make junit dir, dl it'
mkdir -p ./junit/4.12
wget http://central.maven.org/maven2/junit/junit/4.12/junit-4.12.jar -P  ./junit/4.12/

echo 'make hamcrest dir, dl it'
mkdir -p ./org/hamcrest/hamcrest-core/1.3/
wget http://central.maven.org/maven2/org/hamcrest/hamcrest-core/1.3/hamcrest-core-1.3.jar -P ./org/hamcrest/hamcrest-core/1.3/

echo 'make classes/test-classes dir'
mkdir -p ./target/classes/
mkdir -p ./target/test-classes

echo 'compile class/test-classes'
javac -cp ./junit/4.12/junit-4.12.jar:./org/hamcrest/hamcrest-core/1.3/hamcrest-core-1.3.jar ./src/MyStack.java ./src/MyStackDemo.java ./src/MyStackTest.java

echo 'move to dir'
mv ./src/MyStack.class ./target/classes/
mv ./src/MyStackDemo.class ./target/classes/
mv ./src/MyStackTest.class ./target/test-classes/

echo 'execute test via junit runner'
java -cp ./junit/4.12/junit-4.12.jar:./org/hamcrest/hamcrest-core/1.3/hamcrest-core-1.3.jar:./target/test-classes:./target/classes/ org.junit.runner.JUnitCore MyStackTest  


