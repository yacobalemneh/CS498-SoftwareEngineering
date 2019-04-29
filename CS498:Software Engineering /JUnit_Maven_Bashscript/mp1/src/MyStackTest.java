import static org.junit.Assert.*;

import org.junit.Test;

import java.util.ArrayList;

public class MyStackTest {
	@Test 
	public void testPush()
	   {
		MyStack<String> stack = new MyStack<String>();
	      stack.push ("hello");
	      stack.push ("world");
	      assertEquals (stack.peek(), "world");
	   }
	   
	   @Test
	   public void testPushPop() {
		   MyStack<Integer> stack = new MyStack<Integer>();
		   stack.push(5);
		   Integer element = stack.pop();
		   assertEquals(new Integer(5), element);
	   }
	   
	   @Test
	   public void testPushPeek() {
		   MyStack<Integer> stack = new MyStack<Integer>();
		   stack.push(5);
		   assertEquals(stack.peek(), new Integer(5));
	   }
	   
	   @Test
	   public void testPopPeek() {
		   MyStack<Integer> stack = new MyStack<Integer>();
		   stack.push(0);
		   stack.push(1);
		   stack.push(2);
		   stack.pop();
		   assertEquals(stack.peek(), new Integer(1));
	   }
	   
	   @Test
	   public void testConstructorEmpty() {
		   MyStack<Integer> stack = new MyStack<Integer>();
		   assertTrue(stack.empty());
	   }
	   
	   @Test
	   public void testClear() {
		   MyStack<Integer> stack = new MyStack<Integer>();
		   stack.push(5);
		   stack.push(6);
		   stack.clear();
		   assertTrue(stack.empty());
	   }

		@Test
		public void testSize0() {
			MyStack<Integer> stack = new MyStack<Integer>();
			stack.push(5);
			stack.pop();
			assertEquals(stack.size(), 0);
		}
		
		@Test
		public void testSize15() {
			MyStack<Integer> stack = new MyStack<Integer>();
			for	(int i=0; i<15; i++) {
				stack.push(i);
			}
			assertEquals(stack.size(), 15);
		}
		
		@Test
		public void testSize255() {
			MyStack<Integer> stack = new MyStack<Integer>();
			for	(int i=0; i<255; i++) {
				stack.push(i);
			}
			assertEquals(stack.size(), 255);
		}
		
		@Test
		public void testPeekWhenEmpty() {
			MyStack<Integer> stack = new MyStack<Integer>();
			assertNull(stack.peek());
		}
		
		@Test
		public void testToString() {
			MyStack<Integer> stack = new MyStack<Integer>();
			stack.push(0);
			stack.push(1);
			stack.push(2);
			stack.push(3);
			String stackStr = stack.toString();
			ArrayList<Integer> testList = new ArrayList<Integer>();
			testList.add(0);
			testList.add(1);
			testList.add(2);
			testList.add(3);
			String listStr = testList.toString();
			assertEquals(stackStr, listStr);
		}
}
